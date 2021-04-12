<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
// Route::get('/donation/create', 'DonationController@create');
// Route::post('/donation', 'DonationController@store');
Route::resource('donation', 'DonationController');
Route::resource('hotel', 'HotelsController');
