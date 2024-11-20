<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout($id)
    {
        //$menus = Menu::all();
        //dd($id);
        $user = Auth::user();
        //$userid = $user->userid;
        //dd(vars: $card->userid);
        $menus = Menu::findOrFail($id);
       // dd($menus->restid);

        // dd(vars: $menus);

        // $restaurants=User::get()->where('userid' , $menus->restid)->all();
        $restaurants = User::where('userid', $menus->restid)->first();
        
        //dd(vars: $restaurants);
        
        return view('user.checkout', compact('menus', 'user','restaurants'));

    }

}
