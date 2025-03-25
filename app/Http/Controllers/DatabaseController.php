<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use MeekroDB;  // Make sure MeekroDB is being used

class DatabaseController extends Controller
{
    public function testConnection()
    {
        // Create a Monolog logger instance
        $log = new Logger('meekrodb');
        $log->pushHandler(new StreamHandler(storage_path('logs/meekrodb.log'), Logger::ERROR)); // Set path for logging

        try {
            // Set up the MeekroDB connection in static mode
            MeekroDB::$dsn = 'mysql:host=127.0.0.1;dbname=cp5114_team3';
            MeekroDB::$user = 'cp5114_team3';
            MeekroDB::$password = 'vOMw$D1PW]]N';

            
            // Test a query to check connection
            $result = MeekroDB::query("SELECT * FROM users");

            $result = "MeekroDB connection successful!";
        } catch (\Exception $e) {
            // Log the error using Monolog
            $log->error('MeekroDB Connection Error: ' . $e->getMessage());

            // Return the error message
            $result = "Error connecting to database: " . $e->getMessage();
        }

        // Return the result as a JSON response
        return response()->json(['message' => $result]);
    }
}
