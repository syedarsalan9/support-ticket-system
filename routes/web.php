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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::namespace('Web')->group(function () { 
	Route::post('/submit', 'ContactFormController@submit');
});
Route::namespace('Admin')->group(function () { 
	Route::resource('ticket','TicketController')->only(['index','store','show','update','destroy']);
});
Route::get('/home', 'HomeController@index')->name('home');
