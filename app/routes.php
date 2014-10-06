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

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/rolldice/{guess}', function($guess)
{
    // GENERATE RANDOM NUMBER
    $randomNumber = mt_rand(1,6);

    if ($guess == $randomNumber) {
        $match = "WHOA YOU GUESSED IT. YOU MUST BE A SAVANT!";
    }
    else {
        $match = "Wrong. Not even close. And there were only 6 numbers to choose from. Guess better.";
    }
    // ARRAY TO HOLD DATA TO PASS TO VIEW
    $data = [
        'guess' => $guess,
        'randomNumber' => $randomNumber,
        'match' => $match
    ];

    return View::make('roll-dice', $data);
});
