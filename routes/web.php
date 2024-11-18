<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// temp view file
// Route::view('/lay1','layouts.applayout');
// Route::view('/lay2','layouts.restapplayout');
// Route::view('/lay3','layouts.userapplayout');
// Route::view('/lay4','layouts.userproapplayout');

// landing
Route::view('/','index');
Route::view('/about','about');
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

Route::post('/registerpost', [UserController::class, 'register'])->name('registerpost');
Route::post('/loginpost', [UserController::class, 'login'])->name('loginpost');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');



Route::middleware('auth')->group(function () {
    Route::get('/userindex', [UserController::class, 'userindex'])->name('userindex');
    Route::get('/userprofile', [UserController::class, 'profile'])->name('userprofile');

    Route::get('/dashboard', [RestaurantController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [RestaurantController::class, 'profile'])->name('profile');
    Route::get('/orderpage', [RestaurantController::class, 'orderpage'])->name('orderpage');
    Route::get('/productgrid', [RestaurantController::class, 'productgrid'])->name('productgrid');
    Route::get('/productorder', [RestaurantController::class, 'productorder'])->name('productorder');
    Route::get('/review', [RestaurantController::class, 'review'])->name('review');


    Route::post('/menupost', [MenuController::class, 'store'])->name('menupost');
    Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

});

