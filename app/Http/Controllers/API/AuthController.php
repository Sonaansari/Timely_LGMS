<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'dob' => 'required|date',
            'password' => 'required|string|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 422,
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'password' => bcrypt($request->password),
        ]);

        $user->assignRole('user');
        $token = JWTAuth::fromUser($user);

        return response()->json([
            'code' => 201,
            'success' => true,
            'message' => 'User registered successfully.',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'code' => 401,
                'success' => false,
                'message' => 'Invalid credentials.'
            ], 401);
        }

        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => 'Login successful.',
            'data' => [
                'token' => $token,
                'user' => auth()->user()
            ]
        ], 200);
    }

    public function logout()
    {
        try {
            JWTAuth::invalidate(JWTAuth::getToken());

            return response()->json([
                'code' => 200,
                'success' => true,
                'message' => 'Successfully logged out.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'success' => false,
                'message' => 'Logout failed.'
            ], 500);
        }
    }

    public function profile()
    {
        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => 'User profile fetched successfully.',
            'data' => auth()->user()
        ], 200);
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $user->update($request->only('name', 'email'));

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Profile updated successfully',
            'user'    => $user
        ], 200);
    }


    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'code'    => 404,
                'status'  => false,
                'message' => 'Email not found.'
            ], 404);
        }

        $code = rand(100000, 999999);

        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            ['token' => $code, 'created_at' => now()]
        );

        Mail::raw("Your verification code is: $code", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Password Reset Verification Code');
        });

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Verification code sent to your email.'
        ], 200);
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code'  => 'required'
        ]);

        $reset = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $request->code)
            ->first();

        if (!$reset) {
            return response()->json([
                'code'    => 400,
                'status'  => false,
                'message' => 'Invalid verification code.'
            ], 400);
        }

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Code verified successfully.'
        ], 200);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email'         => 'required|email',
            'new_password'  => 'required|min:6|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'code'    => 404,
                'status'  => false,
                'message' => 'User not found.',
            ], 404);
        }

        $user->tokens->each(function ($token) {
            $token->delete();
        });

        $user->password = Hash::make($request->new_password);
        $user->save();

        DB::table('password_resets')->where('email', $request->email)->delete();

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Password has been reset successfully. Please log in again.',
        ], 200);
    }
}
