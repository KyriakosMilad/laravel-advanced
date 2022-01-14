<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/', function () {
		dd(Str::prefix('a7a'));
    return view('welcome');
});

Route::get('/pay', 'PayOrderController@store');
Route::get('/payBank', 'PayOrderController@store');
Route::get('/payCreditCard', 'PayOrderController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
