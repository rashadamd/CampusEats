<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showRestaurants()
    {
        // Retrieve only the first three restaurants
        $user = Auth::user();
        $restaurants = User::where('client', 'restaurant')->take(3)->get();
        
        return view('user.userindex', compact('restaurants', 'user'));
    }
}
