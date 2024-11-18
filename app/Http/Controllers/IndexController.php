<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showLandingPage()
    {
        // Retrieve the first three users with 'restaurant' as the client type
        $restaurants = User::where('client', 'restaurant')->take(3)->get();

        // Pass these restaurants to the landing page view
        return view('index', compact('restaurants'));
    }

     
}