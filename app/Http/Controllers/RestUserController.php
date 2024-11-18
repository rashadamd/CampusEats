<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestUserController extends Controller
{
    public function showRestaurantsFull()
    {
        $user = Auth::user();
        $restaurants = User::where('client', 'restaurant')->get();
        
        return view('user.restaurants', compact('restaurants', 'user'));
    }

    public function showCard($id){
        //dd($id);

        $user = Auth::user();
        $userid = $user->userid;

        $rests=User::get()->where('restid' , $userid)->all();

        return view('user.restaurant-card', compact('rests', 'user'));
    }

    public function showRestCard($id){
        //dd($id);
        $user = User::findOrFail($id);
        //dd(vars: $card->userid);
        $menus=Menu::get()->where('restid' , operator: $user->userid)->all();

        return view('user.restaurant-card', compact('menus', 'user'));
    }


}
