<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function index()
    {
        return View::make('index');
    }
    
    public function showLogin()
    {
        return View::make('login');
    }
    
    public function doLogin() {
        
        $credentials = [
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        ];
        
        if (Auth::attempt($credentials, true))
        {
            return Redirect::Intended('/');
        }
        else {
            return Redirect::back()->withInput();
        }
    }
    
    public function doLogout() {
        Auth::logout();
        return Redirect::action('HomeController@index');

    }

    public function showResume()
    {
        return View::make('resume');
    }

    public function showPortfolio()
    {
        return View::make('portfolio');
    }
}
