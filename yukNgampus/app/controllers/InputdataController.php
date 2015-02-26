<?php

class InputdataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
       $inputdata = Inputdata::all();
	   return View::make('inputdata.index', compact('inputdata'));
       
	}

	public function create()
	{
	   return View::make("inputdata.adddata");        	
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$kampusdata = new Inputdata;
        
        $kampusdata->namakampus                 = Input::get('namakampus');
        $kampusdata->akronim                 = Input::get('akronim');
        $kampusdata->wilayah                 = Input::get('wilayah');
        $kampusdata->alamat                 = Input::get('alamat');
        $kampusdata->website                 = Input::get('website');
        $kampusdata->status                 = Input::get('status');
        $kampusdata->akreditasi                 = Input::get('akreditasi');
        $kampusdata->bahasa                 = Input::get('bahasa');
        $kampusdata->kapasitas                = Input::get('kapasitas');
        $kampusdata->fasilitas                 = Input::get('fasilitas');
        $kampusdata->biaya               = Input::get('biaya');
        $kampusdata->beasiswa                 = Input::get('beasiswa');
        $kampusdata->ujianmasuk                 = Input::get('ujianmasuk');
        $kampusdata->fakultas                 = Input::get('fakultas');
        
		//$fotologo=Input::get('fotologo');
		//$dir_gambar="D:";  
        //$filename = basename($_FILES['fotologo']['name']);
		//$uploadfile = $dir_gambar.$filename;
		//echo $_FILES['userfile']['tmp_name'];
        $kampusdata->save();
        
        return Redirect::to("inputdata/create");
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function lihat($id)
	{
		$kampusdata = Inputdata::find($id);
		return View::make('inputdata.lihat', compact('inputdata'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$kampusdata = Inputdata::find($id);
		return View::make('inputdata.ubah')->with('data', $kampusdata);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function ganti($id)
	{
		{
		$kampusdata = Inputdata::find($id);
        
        $kampusdata->namakampus                 = Input::get('namakampus');
        $kampusdata->akronim                 = Input::get('akronim');
        $kampusdata->wilayah                 = Input::get('wilayah');
        $kampusdata->alamat                 = Input::get('alamat');
        $kampusdata->website                 = Input::get('website');
        $kampusdata->status                 = Input::get('status');
        $kampusdata->akreditasi                 = Input::get('akreditasi');
        $kampusdata->bahasa                 = Input::get('bahasa');
        $kampusdata->kapasitas                = Input::get('kapasitas');
        $kampusdata->fasilitas                 = Input::get('fasilitas');
        $kampusdata->biaya               = Input::get('biaya');
        $kampusdata->beasiswa                 = Input::get('beasiswa');
        $kampusdata->ujianmasuk                 = Input::get('ujianmasuk');
        $kampusdata->fakultas                 = Input::get('fakultas');
          
        
        $kampusdata->save();
		
				return Redirect::to("inputdata");
	}
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	   
		$Kampusdata = Kampusdata::find($id);
		$Kampusdata->delete();
		return Redirect::to('inputdata')->withPesan('Berhasil Dihapus');
	}


}
