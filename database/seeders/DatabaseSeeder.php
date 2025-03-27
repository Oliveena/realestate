<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
use Database\Seeders\CommentSeeder;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 2e5eb90de0a4395c1a40c44558093b1e0e202cb9
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
<<<<<<< HEAD


    //public function runComment()
    //{
    //    $this->call(CommentSeeder::class);
    //}
=======
>>>>>>> 2e5eb90de0a4395c1a40c44558093b1e0e202cb9
}
