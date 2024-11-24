<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RestUserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// temp view file
// Route::view('/lay1','layouts.applayout');
// Route::view('/lay2','layouts.restapplayout');
// Route::view('/lay3','layouts.userapplayout');
// Route::view('/lay4','layouts.userproapplayout');

// landing
//Route::view('/','index');
// Route::view('/about','about');
// // Route::view('/login','login')->name('login');
// // Route::view('/register','register');

// // Restaurant
// // Route::view('/dashboard','restaurants.dashboard');
// Route::view('/profile','restaurants.profile');
// Route::view('/orderpage','restaurants.order-page');
// Route::view('/productorder','restaurants.product-order');
// Route::view('/productgrid','restaurants.product-grid');
// Route::view('/review','restaurants.review');

// //user
// Route::view('/checkout','user.checkout');
// Route::view('/userorderpage','user.order-page');
// Route::view('/userprofile','user.profile');
// Route::view('/restaurantcard','user.restaurants-card');
// Route::view('/restaurants','user.restaurants');
// Route::view('/userabout','user.userabout');
//Route::view('/userindex','user.userindex');

// Route::post('/', [UserController::class, 'index'])->name('index');
// Route::post('/about', [UserController::class, 'about'])->name('about');

Route::get('/', [IndexController::class, 'showLandingPage'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');

Route::post('/registerpost', [UserController::class, 'register'])->name('registerpost');
Route::post('/loginpost', [UserController::class, 'login'])->name('loginpost');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/index', [UserController::class, 'showRestaurants'])->name('index');


Route::middleware('auth')->group(function () {
    Route::get('/userprofile', [UserController::class, 'profile'])->name('userprofile');
    Route::get('/userindex', [DashboardController::class, 'showRestaurants'])->name('userindex');

    Route::get('/restaurants', [RestUserController::class, 'showRestaurantsFull'])->name('restaurants');
    //Route::get('/restaurants-card-{id}',[ RestUserController::class, 'showCard']);
    Route::get('/restaurants-card-{id}',[ RestUserController::class, 'showRestCard']);

    //Route::get('/userorderpage', action: [UserController::class, 'orderpage'])->name('userorderpage');
    Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
    Route::get('/userabout', [UserController::class, 'userabout'])->name('userabout');
    Route::get('/restaurantcard', [UserController::class, 'restaurantcard'])->name('restaurantcard');
    //Route::get('/restaurants', [UserController::class, 'restaurants'])->name('restaurants');

    // Route::get('/dashboard', [RestaurantController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [RestaurantController::class, 'profile'])->name('profile');
    // Route::get('/orderpage', [RestaurantController::class, 'orderpage'])->name('orderpage');
    Route::get('/productgrid', [MenuController::class, 'productgrid'])->name('productgrid');
    //Route::get('/productorder', [RestaurantController::class, 'productorder'])->name('productorder');
    Route::get('/review', [RestaurantController::class, 'review'])->name('review');

    Route::get('/menu', [RestaurantController::class, 'menu'])->name('menu');
    Route::post('/menupost', [MenuController::class, 'store'])->name('menupost');
    Route::get('/menuview', [MenuController::class, 'menu'])->name('menuview');
    Route::delete('/menu-{id}', [MenuController::class, 'destroy'])->name('menu.delete');

    Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');
    Route::get('/checkout-{id}',[ OrderController::class, 'checkout']);

    Route::get('/orderpage', [OrderController::class, 'orderpage'])->name('orderpage');
    Route::get('/userorderpage', action: [OrderController::class, 'userorderpage'])->name('userorderpage');
    Route::get('/productorder', [OrderController::class, 'productorder'])->name('productorder');
    Route::post('/update-order-status/{orderid}', [OrderController::class, 'updateOrderStatus']);


    Route::get('/dashboard', [DashboardController::class, 'restDashboard'])->name('dashboard');
    Route::put('/orders-{order}', [DashboardController::class, 'update'])->name('orders.update');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    
});


