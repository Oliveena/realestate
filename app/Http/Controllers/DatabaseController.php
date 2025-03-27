<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Message;
use App\Models\Comment;
use App\Models\BlogArticle;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
 
 
class DatabaseController extends Controller
{
    public function testConnection()
    {
        // new Monolog instance
        $log = new Logger('eloquent'); 
        // Log to eloquent.log and capture ERROR level logs
        $log->pushHandler(new StreamHandler(storage_path('logs/eloquent.log'), 400)); 

        try {
            // fetching all users via Eloquent from 'users'
            $users = User::all(); 

            $result = "Eloquent connection successful!"; 
            // Monolog logs the info message to eloquent.log
            $log->info($result); 

        } catch (\Exception $e) {
            // Monolog logs the error
            $log->error('Eloquent Connection Error: ' . $e->getMessage());

            // return the error message
            $result = "Error connecting to database: " . $e->getMessage();
        }

        return response()->json(['message' => $result]);
    }
}


