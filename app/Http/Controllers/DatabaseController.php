<?php 

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class DatabaseController extends Controller
{
    public function testConnection()
    {
        // Create a Monolog logger instance
        $log = new Logger('eloquent');
        $log->pushHandler(new StreamHandler(storage_path('logs/eloquent.log'), Logger::ERROR)); // Set path for logging

        try {
            // Use Eloquent to fetch users
            $users = User::all(); // Eloquent retrieves all users from the 'users' table

            $result = "Eloquent connection successful!"; // If the query works, the connection is fine
        } catch (\Exception $e) {
            // Log the error using Monolog
            $log->error('Eloquent Connection Error: ' . $e->getMessage());

            // Return the error message
            $result = "Error connecting to database: " . $e->getMessage();
        }

        // Return the result as a JSON response
        return response()->json(['message' => $result]);
    }
}