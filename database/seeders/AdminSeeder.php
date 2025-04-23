<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Admin::updateOrCreate([
        //     'email' => 'admin.timely@gmail.com'
        // ], [
        //     'name' => 'Super Admin',
        //     'password' => Hash::make('password123')  
        // ]);

        {
            Admin::updateOrCreate([
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'admin.timely@gmail.com',
                'phone' => '+1234567890',
                'company' => 'House of Investment',
                'city' => 'New York',
                'address' => '123 Main Street',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
