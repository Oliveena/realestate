<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create a test user (realtor)
        $user = User::create([
            'firstName' => 'MrRealtor',
            'lastName' => 'Testtest',
            'phoneNumber' => '1234567890',
            'email' => 'test@gmail.com',
            // hashing the password!
            'password' => Hash::make('Test1234!'),  
            'city' => 'Montreal',  
            'role' => 'Realtor',   
            'avatar' => null,         
        ]);

        // Confirm the user was created
        if ($user) {
            echo "User created successfully: " . $user->email . "\n";
        } else {
            echo "User creation failed.\n";
        }

        // print the user
        dd($user);
    }
}
