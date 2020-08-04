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
<<<<<<< HEAD
//Game routes
Route::get('/games', 'GameController@index')->name('game.index')->middleware('auth');
Route::get('/game/{id}', 'GameController@show')->name('game.show')->middleware('auth');
Route::get('/create/game', 'GameController@create')->name('game.create')->middleware('auth');
Route::post('/create/game', 'GameController@store')->name('game.store')->middleware('auth');
Route::get('/edit/game/{id}', 'GameController@edit')->name('game.edit')->middleware('auth');
Route::post('/edit/game/{id}', 'GameController@update')->name('game.update')->middleware('auth');
Route::post('/destroy/game/{id}', 'GameController@destroy')->name('game.destroy')->middleware('auth');

//Anime routes
Route::get('/animes', 'AnimeController@index')->name('anime.index')->middleware('auth');
Route::get('/anime/{id}', 'AnimeController@show')->name('anime.show')->middleware('auth');
Route::get('/create/anime', 'AnimeController@create')->name('anime.create')->middleware('auth');
Route::post('/create/anime', 'AnimeController@store')->name('anime.store')->middleware('auth');
Route::get('/edit/anime/{id}', 'AnimeController@edit')->name('anime.edit')->middleware('auth');
Route::post('/edit/anime/{id}', 'AnimeController@update')->name('anime.update')->middleware('auth');
Route::post('/destroy/anime/{id}', 'AnimeController@destroy')->name('anime.destroy')->middleware('auth');
=======
Route::get('/games', 'GameController@index')->name('games.index')->middleware('auth');
Route::get('/games/{id}', 'GameController@show')->name('games.show')->middleware('auth');
Route::get('/create', 'GameController@create')->name('games.create')->middleware('auth');
Route::post('/create', 'GameController@store')->name('games.create')->middleware('auth');
Route::get('/edit/{id}', 'GameController@edit')->name('games.edit')->middleware('auth');
Route::post('/edit/{id}', 'GameController@update')->name('games.update')->middleware('auth');
Route::post('/destroy/{id}', 'GameController@destroy')->name('games.destroy')->middleware('auth');
>>>>>>> 8ea7b71a85cede8985124bcd57e9c19afa4b9832
