<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('me', 'AuthController@me');
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::post('logout', 'AuthController@logout');

Route::apiResource('products', 'ProductController');
Route::apiResource('products/{product}/reviews', 'ReviewController')
    ->only('store', 'update', 'destroy');
