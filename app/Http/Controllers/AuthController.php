<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // return the login view
    }
    
    public function showRegisterForm()
    {
        return view('register'); // return the login view
    }

    
}
