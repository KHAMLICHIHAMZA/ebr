<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/parametres', function () {
    return view('parametres.parametres');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users','UserController');

Route::put('users/updat', 'UserController@updat')->name('users.updat');

Route::resource('/interventions','InterventionController');

Route::get('user/{us}', 'UserController@delete')->name('user.delete');



