<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DatabaseController extends Controller
{
    public function testConnection()
    {
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