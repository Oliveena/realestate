<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LoginController extends Controller
{
    public function create() {
        return view("auth.login");
    }
}

// CRUD stuff goes here
// it would call the model 
// 

