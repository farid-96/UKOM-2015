<?php
 
class UserController extends \BaseController {
 
    public function login()
    {
                    return View::make('login');
    }
	
	public function authenticate() {
	if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		   echo "login berhasil";
		   return Redirect::to('inputdata');
		}
		else{
		  return Redirect::to('login')->with('pesan_error', 'Login gagal, email atau password salah!');
		}
	}

	
 
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
 
}