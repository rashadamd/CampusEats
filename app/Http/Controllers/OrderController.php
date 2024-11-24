<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

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


    public function store(Request $request)
    {
     
        // Validate request data
        $validated = $request->validate([
            'userid' => 'required|exists:users,userid',
            'menuid' => 'required|exists:menus,menuid',
            'quantity' => 'required|min:1',
            'amount' => 'required|min:0',
        ]);

        // Save the order
        $order = Order::create([
            'userid' => $validated['userid'],
            'menuid' => $validated['menuid'],
            'quantity' => $validated['quantity'],
            'amount' => $validated['amount'],
        ]);

        //dd($order);

        // Redirect with success message
        return redirect()->route('userindex')->with('success', 'Order placed successfully!');
    }


    public function orderpage(){
         // Get the logged-in restaurant user
        $restaurant = Auth::user();
        $user = Auth::user();

        // Retrieve orders for the logged-in restaurant
        $orders = DB::table('orders')
            ->join('menus', 'orders.menuid', '=', 'menus.menuid')
            ->join('users as customers', 'orders.userid', '=', 'customers.userid')
            ->where('menus.restid', $restaurant->userid) // Filter by restaurant ID
            ->select(
                'orders.orderid',
                'orders.created_at as date',
                'customers.name as customer',
                'customers.address',
                'orders.quantity', // Include quantity
                'orders.amount',
                'customers.mobile_no',
                'orders.status'
            )
            //->orderBy('orders.created_at', 'desc')
            ->get();

        // Pass the orders to the restaurants.order-page view
        return view('restaurants.order-page', compact('user','orders'));
    }

    public function userorderpage()
    {
        // Get the logged-in user
        $user = Auth::user();
    
        // Retrieve orders for the logged-in user
        $orders = DB::table('orders')
            ->join('menus', 'orders.menuid', '=', 'menus.menuid')
            ->join('users as restaurants', 'menus.restid', '=', 'restaurants.userid')
            ->where('orders.userid', $user->userid)
            ->select(
                'orders.orderid',
                'orders.created_at as date',
                'restaurants.name as restaurant',
                'restaurants.address',
                'orders.quantity',
                'orders.amount',
                'restaurants.mobile_no',
                'orders.status'
            )
            // ->orderBy('orders.created_at', 'desc')
            ->get();
    
        // Pass the orders to the user.order-page view
        return view('user.order-page', compact('user','orders'));
    }
    

    public function productorder()
{
    // Get the logged-in restaurant user
    $restaurant = Auth::user();
    $user = Auth::user();

    // Retrieve orders for the logged-in restaurant
    $orders = DB::table('orders')
        ->join('menus', 'orders.menuid', '=', 'menus.menuid')
        ->join('users as customers', 'orders.userid', '=', 'customers.userid')
        ->where('menus.restid', $restaurant->userid) // Filter by restaurant ID
        ->select(
            'orders.orderid',
            'orders.created_at as date',
            'customers.name as customer_name',
            'customers.email as customer_email',
            'customers.mobile_no as customer_mobile',
            'customers.address as customer_address',
            'orders.status',
            'orders.amount'
        )
        //->orderBy('orders.created_at', 'desc')
        ->get();

    return view('restaurants.product-order', compact('user','orders'));
}

    public function updateOrderStatus(Request $request, $orderid)
    {
        // Validate input
        $request->validate([
            'status' => ['required', Rule::in(['pending', 'processing', 'completed'])],
        ]);

        // Find the order
        $order = Order::findOrFail($orderid);

        // Ensure the logged-in restaurant user can update this order
        $loggedInRestId = Auth::user()->userid;
        $menuRestId = Menu::where('menuid', $order->menuid)->value('restid');
        if ($loggedInRestId !== $menuRestId) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        // Update the status
        $order->status = $request->status;
        $order->save();

        return response()->json(['success' => true, 'message' => 'Order status updated successfully']);
    }



    



}
