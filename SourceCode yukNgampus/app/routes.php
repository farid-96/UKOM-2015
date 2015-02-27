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

Route::resource("/", "KampusdataController");
Route::get('/', function()
{
	return View::make('beranda.index');
});
Route::get('/form', function()
{
	return View::make('form.index');
});
Route::post(
'kampusdata/search',
array(
	'as'=>'kampusdata.search',
	'uses'=>'KampusdataController@dataSearch'
	)
	);


Route::get('/register', 'RegisterController');
Route::post('/register', function()
{
    // 1. setting validasi
    $validator = Validator::make(
        Input::all(),
        array(
            "email"                 => "required|email|unique:users,email",
            "password"              => "required|min:6",
            "password_confirmation" => "same:password",
        )
    );

    // 2a. jika semua validasi terpenuhi simpan ke database
    if($validator->passes())
    {
        $user = new User;
        $user->email    = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        return Redirect::to("register");
    }
    // 2b. jika tidak, kembali ke halaman form registrasi
    else
    {
        return Redirect::to('register')
            ->withErrors($validator)
            ->withInput();
    }
});

Route::get("beranda/cari", "BerandaController@cari");
//Route::resource("cari", "CariController");
Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');
Route::resource("beranda", "BerandaController");
Route::resource("kampusdata", "KampusdataController");
Route::resource("inputdata", "InputdataController");
Route::resource("kampuscari", "KampuscariController");
Route::get("inputdata/create", "InputdataController@create");
Route::post("inputdata/post", "InputdataController@store");
Route::put('inputdata/ubah/{id}', array('as' => 'ganti','uses'=> 'InputdataController@ganti'));
Route::get('inputdata/ubah/{id}', array('as' => 'ubah','uses'=> 'InputdataController@ubah'));
Route::get("inputdata/{id}/destroy","InputdataController@destroy");
//Route::controller("login", "LoginController");
//Route::controller("register", "RegisterController");
Route::get("inputdata/create", "InputdataController@create");
//Route::post("inputdata/post", "InputdataController@store");
Route::get("input/{id}/destroy","InputdataController@destroy");
Route::get('kampusdata/cari','KampusdataController@cari');
Route::get('kampusdata/lihat/{id}','KampusdataController@lihat');
Route::get('kampuscari/lanjut','KampuscariController@lanjut');
//Route::get('kampuscari/hasil','KampuscariController@show');
Route::get('inputdata/lihat/{id}', array('as' => 'lihat','uses'=> 'KampusdataController@lihat'));
//Route::get("inputdata/lihat", "InputdataController@show");


//Route::get('tambah', function() {return 'Halaman Tambah Kampusdata'; }); //menampilkan form membuat data baru

//Route::resource('inputdatas', 'InputdataController');
//Route::get('inpudata','InputdataController@index');



Route::group(array('before' => 'auth'), function()
{
Route::get('logout', array('uses' => 'UserController@logout'));
 
// Route yang ingin diproteksi taruh disini
});
