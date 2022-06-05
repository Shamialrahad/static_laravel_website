<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\SiteController@showHome');
Route::get('/about','App\Http\Controllers\SiteController@showAbout');
Route::get('/service','App\Http\Controllers\SiteController@showService');
