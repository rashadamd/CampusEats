<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function showLandingPage()
    {
        // Retrieve the first three users with 'restaurant' as the client type
        $restaurants = User::where('client', 'restaurant')->take(3)->get();

        // Satisfied Customers: Assuming a completed order represents a satisfied customer
        $satisfiedCustomerCount = Order::where('status', 'completed')->distinct('userid')->count();

        // Best Restaurants: Count the number of restaurants
        $restaurantCount = User::where('client', 'restaurant')->count();

        // Food Delivered: Count all completed orders
        $foodDeliveredCount = Order::where('status', 'completed')->count();

        return view('index', compact('restaurants','satisfiedCustomerCount', 'restaurantCount', 'foodDeliveredCount'))->with('success','Homepage');


    }

    public function about()
    {
        $restaurantCount = User::where('client', 'restaurant')->count();

        // Count delivered food items
        $foodDeliveredCount = Order::where('status', 'completed')->count();
        $user = Auth::user();

        return view('about',compact('user','restaurantCount', 'foodDeliveredCount'));
    }

     
}