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

Auth::routes();

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', 'HomeController@index');
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/games', 'GameController@index')->name('games.index')->middleware('auth');
Route::get('/games/{id}', 'GameController@show')->name('games.show')->middleware('auth');
Route::get('/create', 'GameController@create')->name('games.create')->middleware('auth');
Route::post('/create', 'GameController@store')->name('games.create')->middleware('auth');
Route::get('/edit/{id}', 'GameController@edit')->name('games.edit')->middleware('auth');
Route::post('/edit/{id}', 'GameController@update')->name('games.update')->middleware('auth');
Route::post('/destroy/{id}', 'GameController@destroy')->name('games.destroy')->middleware('auth');