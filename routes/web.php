<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function(){
    return view('welcome');
});

Route::get('/signin', function(){
    echo "Hello!";
});

Route::get('/attendance', function(){
    return view('attendance');
});

Route::get('/init', function(){
    return view('init');
});
*/

Route::get('/', 'App\Http\Controllers\HomeController@welcome');

Route::get('/signin', 'App\Http\Controllers\AuthController@signin');
Route::get('/callback', 'App\Http\Controllers\AuthController@callback');

Route::get('/signout', 'App\Http\Controllers\AuthController@signout');

Route::get('/attendance', 'App\Http\Controllers\HomeController@attendance');

Route::get('/record_function', function(){
    return view('record_function');
});

Route::get('/logout', function(){
    return view('logout_function');
});