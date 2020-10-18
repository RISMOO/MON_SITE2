<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
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

///////////////WELCOME/////////////
Route::get('/', function () {
     return view('welcome');
     });

////////MESSAGE/////////////////
Route::resource('/accueil', 'IndexController');
Route::post('/accueil','IndexController@store');



///////VOYAGER//////////////////
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/////////////////HOME////////////
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

