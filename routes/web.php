<?php

use Illuminate\Support\Facades\Route;


// temp view file
//Route::view('/','layouts.applayout');
Route::view('/lay','layouts.restapplayout');
// landing
Route::view('/','index');
Route::view('/about','about');
Route::view('/login','login');
Route::view('/register','register');

// Restaurant
Route::view('/dashboard','restaurants.dashboard');
Route::view('/profile','restaurants.profile');
Route::view('/order-page','restaurants.order-page');
Route::view('/product-order','restaurants.product-order');
Route::view('/product-grid','restaurants.product-grid');
Route::view('/review','restaurants.review');
