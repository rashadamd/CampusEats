<?php

use Illuminate\Support\Facades\Route;


// temp view file
Route::view('/lay1','layouts.applayout');
Route::view('/lay2','layouts.restapplayout');
Route::view('/lay3','layouts.userapplayout');
Route::view('/lay4','layouts.userproapplayout');

// landing
Route::view('/','index');
Route::view('/about','about');
Route::view('/login','login');
Route::view('/register','register');

// Restaurant
Route::view('/dashboard','restaurants.dashboard');
Route::view('/profile','restaurants.profile');
Route::view('/orderpage','restaurants.order-page');
Route::view('/productorder','restaurants.product-order');
Route::view('/productgrid','restaurants.product-grid');
Route::view('/review','restaurants.review');


//user
Route::view('/checkout','user.checkout');
Route::view('/userorderpage','user.order-page');
Route::view('/userprofile','user.profile');
Route::view('/restaurantcard','user.restaurants-card');
Route::view('/restaurants','user.restaurants');
Route::view('/userabout','user.userabout');
Route::view('/userindex','user.userindex');