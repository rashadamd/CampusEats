<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    
        // public function menu(Request $request)
        // {
        //     $user = User::find($request);
        //     dd($request);

        //     if ($user->client === 'restaurant') {
        //         $menus = Menu::where('restid', $request)->get();
        //     } else {
        //         abort(403, 'Unauthorized action.');
        //     }

        //     return view('restaurants/menu', compact('menus'));
        // }

    public function store(Request $request)
    {

        // $user = Auth::user();

        // $imagePath = null;
        //  if ($request->hasFile('image')) {
        //      $imagePath = $request->file('image')->store('uploads', 'public');
        //  }
        
        // // dd($user['userid']);
        // if ($user && $user->client !== 'restaurant') {
        //     return redirect()->back()->withErrors(['error' => 'Only restaurant users can create menu items']);
        // }

        // $menu = Menu::create([
        //     'restid' => $user->userid,
        //     // 'image' => $request->image,
        //     'image' => $imagePath,
        //     'name' => $request->name,
        //     'price' => $request->price,
        // ]);
        
        // //dd($menu);
        // return redirect()->route('menu')->with('success', 'Menu item created successfully.');





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




       
        // $validator = Validator::make($request->all(), [
        //     'restid' => $user->userid,
        //     'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',
        //     'name' => 'required|string|max:255',
        //     'price' => 'required|number',
        // ]);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }


        // // Create new user
        // $menu = new User();
        // $menu->restid = $user->restid;
        // $menu->name = $request->name;
        // $menu->price = $request->address;        
        // $menu->image = $imagePath;
        // $menu->save();

        // return redirect()->route('menu')->with('success', 'Menu item created successfully');

    }

    public function menu()
    {

        $user = Auth::user();

        $menus = Menu::whereHas('restaurant', function ($query) {
            $query->where('client', 'restaurant');
        })->get();

        return view('restaurants.menu', compact('menus', 'user'));
    }



}
