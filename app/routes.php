<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::resource('users', 'UsersController');

Route::resource('tags', 'TagsController');

/*
|--------------------------------------------------------------------------
| AUTH Routes
|--------------------------------------------------------------------------
*/
// DISPLAY LOGIN FORM
Route::get('/login', 'HomeController@showLogin');

// LOG USER IN
Route::post('/login', 'HomeController@doLogin');

// LOG USER OUT
Route::get('/logout', 'HomeController@doLogout');
