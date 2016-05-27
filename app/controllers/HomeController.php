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
    public function contacts(){
        if(Input::get('g-recaptcha-response')){
            $captcha = json_decode($this->getRecaptcha(Input::get('g-recaptcha-response')));
        } else {
            return Response::json(['result'=>0]);
        }
        return Response::json(['result'=>1]);
    }

    private function getRecaptcha($response){
        // Create map with request parameters
        $params = array(
            'secret' => '6Ld4lh8TAAAAAOOM1dqiM28Myx5LzLWuFd0qMVwl',
            'response' => $response
        );

        // Build Http query using params
        $query = http_build_query ($params);

        // Create Http context details
        $options = array(
            'http' => array(
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                    "Content-Length:".strlen($query)."\r\n".
                    "User-Agent:MyAgent/1.0\r\n",
                'method'  => "POST",
                'content' => $query,
            ),
        );
        $context = stream_context_create($options);

        // Read page rendered as result of your POST request
        $result =  file_get_contents (
            'https://www.google.com/recaptcha/api/siteverify',  // page url
            false,
            $context);

        // Server response is now stored in $result variable so you can process it
        return $result;
    }

}
