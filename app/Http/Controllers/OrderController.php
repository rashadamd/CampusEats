<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // app/Http/Controllers/OrderController.php
public function checkout(Request $request)
{
    //$menus = Menu::all();
    //dd($id);
    $user = Auth::user();
    $userid = $user->userid;
    //dd(vars: $card->userid);
    $menus=Menu::get()->where('restid' , operator: $user->userid)->all();

    // new
    $restaurants = User::where('client', 'restaurant')->get();

    return view('user.checkout', compact('menus', 'user','restaurants'));

}

}
