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

Route::get('/posts/manage', 'PostsController@manage');

Route::get('/posts/massmanage', 'PostsController@massManage');

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
/*
|--------------------------------------------------------------------------
| Resource Controller Routes
|--------------------------------------------------------------------------
*/
Route::resource('posts', 'PostsController');
