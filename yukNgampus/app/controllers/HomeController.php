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

	public function showWelcome()
	{
		return View::make('hello');
	}   
    public function formsederhana()
    {
            return View::make('formsederhana');
    }
     
    public function postformsederhana()
    {
            $nama = Input::get('nama');
            $jeniskelamin = Input::get('jeniskelamin');
            $alamat = Input::get('alamat');
     
            return 'Nama : '.$nama.'< br/> Jenis Kelamin : '.$jeniskelamin.'< br/> Alamat '.$alamat;
    }
    
    }
