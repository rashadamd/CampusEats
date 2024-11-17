<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     *
     * @return \Illuminate\View\View
     */

    public function dashboard()
    {
        $user = Auth::user();
        return view('restaurants/dashboard',compact('user'));
    }

    public function profile()
    {

        $user = Auth::user();
       // dd($user);
        return view('restaurants/profile',compact('user'));
    }

    public function orderpage()
    {

        $user = Auth::user();
       // dd($user);
        return view('restaurants/order-page',compact('user'));
    }

    public function productgrid()
    {

        $user = Auth::user();
       // dd($user);
        return view('restaurants/product-grid',compact('user'));
    }

    public function productorder()
    {

        $user = Auth::user();
       // dd($user);
        return view('restaurants/product-order',compact('user'));
    }

    public function review()
    {

        $user = Auth::user();
       // dd($user);
        return view('restaurants/review',compact('user'));
    }

}