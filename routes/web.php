<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('admin.dashboard');
// });s
// Route::get('/login', function () {
//     return view('admin.auth.login');
// });


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminController::class, 'login']);
    
    Route::middleware('auth:admin')->group(function () {
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::post('/admin/profile/password', [AdminController::class, 'updatePassword'])->name('profile.password');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });

});