<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:5000', 
        ]);
    
        $user = Auth::user();
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            try {
                $imagePath = $request->file('image')->store('uploads', 'public');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Error uploading image: ' . $e->getMessage()]);
            }
        }
    
        try {
            $menu = Menu::create([
                'restid' => $user->userid,
                'image' => $imagePath,
                'name' => $request->name,
                'price' => $request->price,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error creating menu item: ' . $e->getMessage()]);
        }
    
        return redirect()->route('menu')->with('success', 'Menu item created successfully.');


    }

    public function menu()
    {
        $user = Auth::user();
        $userid = $user->userid;

        $menus=Menu::get()->where('restid' , $userid)->all();
        // dd($menus);

        return view('restaurants.product-grid', compact('menus', 'user'));
    }

    public function productgrid()
    {

        $user = Auth::user();
    //    dd($user['id']);
        return view('restaurants.product-grid',compact('user'));
    }
}


