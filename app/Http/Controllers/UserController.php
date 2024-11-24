<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

        public function userindex()
        {
            $user = Auth::user();
            $restaurantCount = User::where('client', 'restaurant')->count();

            

            return view('user.userindex',compact('user','restaurantCount'));
        }

        public function profile()
        {

            $user = Auth::user();
        // dd($user);
            return view('user.profile',compact('user'));
        }
        
        public function orderpage()
        {
            $user = Auth::user();
            return view('user.order-page',compact('user'));
        }
        public function checkout()
        {
            $user = Auth::user();
            return view('user.checkout',compact('user'));
        }
        public function userabout()
        {
            $restaurantCount = User::where('client', 'restaurant')->count();

            // Count delivered food items
            $foodDeliveredCount = Order::where('status', 'completed')->count();
            $user = Auth::user();

            return view('user.userabout',compact('user','restaurantCount', 'foodDeliveredCount'));
        }
        public function restaurantcard()
        {
            $user = Auth::user();
            return view('user.restaurant-card',compact('user'));
        }
        public function restaurants()
        {
            $user = Auth::user();
            return view('user.restaurants',compact('user'));
        }


     // Register Function
     public function register(Request $request)
     {
         // Validate request data
         $validator = Validator::make($request->all(), [
             'client' => 'required|string',
             'name' => 'required|string|max:255',
             'address' => 'required|string',
             'mobileno' => 'required|string|max:11',
             'email' => 'required|string|email|max:255|unique:users,email',
             'uname' => 'required|string|max:255|unique:users,username',
             'password' => [
                    'required',
                    'string',
                    'min:8',               
                    'regex:/[A-Z]/',        
                    'regex:/[a-z]/',       
                    'regex:/[0-9]/',       
                    'regex:/[@$!%*?&]/',   
                ],
             'password_confirmation' => 'required|same:password',
             'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',
         ]);

        //  dd($validator);
 
         if ($validator->fails()) {
             return back()->withErrors($validator)->withInput()->with('failure', 'Unsuccessful registration');

         }
 
         // Handle file upload if image is provided
         $imagePath = null;
         if ($request->hasFile('image')) {
             $imagePath = $request->file('image')->store('uploads', 'public');
         }
 
         // Create new user
         $user = new User();
         $user->client = $request->client;
         $user->name = $request->name;
         $user->address = $request->address;
         $user->mobile_no = $request->mobileno;
         $user->email = $request->email;
         $user->username = $request->uname;
         $user->password = Hash::make($request->password);
         $user->image = $imagePath;
         $user->save();
 
         return redirect('/login')->with('success', 'Registration successful! Please log in.');
     }
 
     // Login Function
     public function login(Request $request)
     {
         // Validate login data
         $credentials = $request->only('uname', 'password');
     
         if (Auth::attempt(['username' => $credentials['uname'], 'password' => $credentials['password']])) {
                // Authentication passed, redirect based on client type
                $user = Auth::user();

                if ($user->client === 'restaurant') {
                    return redirect()->intended('/dashboard')->with('success', 'Login successful! ');
                } elseif ($user->client === 'user') {
                    return redirect()->intended('/userindex')->with('success', 'Login successful! ');
                }
            }

         // If authentication fails
         return back()->withErrors(['loginError' => 'Invalid username or password'])->withInput()->with('failure', 'Invalid Login Credentials');
     }

     // Logout Function
     public function logout()
     {
      
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have been logged out');
         //return redirect('/login')->with('success', 'You have been logged out');
     }
}
