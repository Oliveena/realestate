<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

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

=======
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
>>>>>>> 2e5eb90de0a4395c1a40c44558093b1e0e202cb9
class DatabaseController extends Controller
{
    public function testConnection()
    {
<<<<<<< HEAD
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


=======
        // Set up the connection using MeekroDB
        \DB::$user = env('DB_USERNAME', 'cp5114_team3');
        \DB::$password = env('DB_PASSWORD', 'vOMw$D1PW]]N');
        \DB::$dbName = env('DB_DATABASE', 'cp5114_team3');
        \DB::$host = env('DB_HOST', 'fsd13.ca');
        \DB::$encoding = 'utf8mb4';
 
        dd(env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'), env('DB_HOST'));
 
        try {
            \DB::connection()->getPdo();
        $result = "Database connection successful!";
    } catch (\Exception $e) {
        $result = "Error connecting to database: " . $e->getMessage();
    }
 
    return response()->json(['message' => $result]);
    }
}
>>>>>>> 2e5eb90de0a4395c1a40c44558093b1e0e202cb9
