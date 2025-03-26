<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment; 
use App\Models\User;    
use App\Models\BlogArticle;

class CommentSeeder extends Seeder
{
    public function run()
    {
        // Ensure you have existing users and articles to reference in the comments
        $users = User::all(); 
        $articles = BlogArticle::all(); 

        // If no users or articles exist, we cannot create comments
        if ($users->isEmpty() || $articles->isEmpty()) {
            echo "No users or articles found. Seeder aborted.\n";
            return;
        }

        // Create 5 sample comments
        foreach (range(1, 5) as $index) {
            Comment::create([
                'commentAuthorId' => $users->random()->id,  
                'commentBody' => "This is a sample comment #$index",   
                'created_at' => now(),  
                'updated_at' => now(),
                'articleId' => 1,    
            ]);
        }

        echo "Sample comments created successfully.\n";
    }
}
