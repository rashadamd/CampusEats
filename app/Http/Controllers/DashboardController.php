<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $restaurantCount = User::where('client', 'restaurant')->count();
        $satisfiedCustomerCount = Order::where('status', 'completed')->distinct('userid')->count();

        $foodDeliveredCount = Order::where('status', 'completed')->count();

        
        return view('user.userindex', compact('restaurants', 'user','restaurantCount','foodDeliveredCount','satisfiedCustomerCount'));
    }
}
