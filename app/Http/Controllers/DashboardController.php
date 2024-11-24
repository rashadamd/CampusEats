<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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


    public function restDashboard(Request $request)
    {
        $user = Auth::user();
        // Fetch the current logged-in restaurant's ID
        $restId = auth()->user()->userid;

        // Total KPIs
        $totalMenus = Menu::where('restid', $restId)->count();
        $totalRevenue = Order::whereHas('menu', function ($query) use ($restId) {
            $query->where('restid', $restId);
        })->sum('amount');
        $totalOrders = Order::whereHas('menu', function ($query) use ($restId) {
            $query->where('restid', $restId);
        })->count();
        $totalCustomers = Order::whereHas('menu', function ($query) use ($restId) {
            $query->where('restid', $restId);
        })->distinct('userid')->count();

        // Order Status Overview
        $orderStatus = [
            'pending' => Order::whereHas('menu', function ($query) use ($restId) {
                $query->where('restid', $restId);
            })->where('status', 'pending')->count(),
            'processing' => Order::whereHas('menu', function ($query) use ($restId) {
                $query->where('restid', $restId);
            })->where('status', 'processing')->count(),
            'completed' => Order::whereHas('menu', function ($query) use ($restId) {
                $query->where('restid', $restId);
            })->where('status', 'completed')->count(),
        ];

        // Data for charts (Sales trend)
        $salesChartData = Order::whereHas('menu', function ($query) use ($restId) {
            $query->where('restid', $restId);
        })->selectRaw('DATE(created_at) as date, SUM(amount) as total_sales')
            ->groupBy('date')
            ->get();
            

        return view('restaurants.dashboard', compact('user','totalMenus', 'totalRevenue', 'totalOrders', 'totalCustomers', 'orderStatus', 'salesChartData'));
    }


    
}
