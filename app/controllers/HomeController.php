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
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public $theme;
    public function __construct(){
        $this->theme = Theme::uses('transpera')->layout('default');
    }

	public function showWelcome()
	{
        return $this->theme->of('maine')->render();
	}
    public function admin()
    {
        $this->theme = Theme::uses('admin')->layout('admin');
        return $this->theme->of('admin')->render();
    }

    public function login()
    {
        if(Input::get('username')=='admin' && Input::get('password')=='password'){
            return Redirect::to('dashboard');
            }
    }

}
