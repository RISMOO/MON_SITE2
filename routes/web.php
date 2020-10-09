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

Route::get('/', 'IndexController@index');
Route::get('/accueil','IndexController@accueil');
Route::get('/CoupDeCoeur','IndexController@CoupDeCoeur');

Auth::routes();




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

////////////////message///////////////////

Route::resource('/message','MessageController');
Route::post('/message','MessageController@store');
Route::get('/message/create', 'MessageController@create');
//////////////////////CV///////////////////





/////////////////coupdecoeur////////////


