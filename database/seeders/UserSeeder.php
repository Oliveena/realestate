<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use MeekroDB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // new MeekroDB instance
        $db = new MeekroDB;

        // inserting test realtor
        $db->insert('users', [
            'firstName' => 'Tester',
            'lastName' => 'Realtor',
            'email' => 'test@gmail.com',
            'phoneNumber' => '1234567890',
            'password' => bcrypt('Test1234!'),
            'city' => 'Montreal',
            'role' => 'Realtor',
            'avatar' => 1 
        ]);

        // get the ID of user
        $userId = $db->insertId();
        echo "New user created with ID: $userId";
    }
}
