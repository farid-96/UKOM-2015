<?php

class KampusdataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$kampusdata = Kampusdata::All();
		return View::make("kampusdata.index")->with('data', $kampusdata);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make("kampusdata.addkampusdata");
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$kampusdata = new Kampusdata;
		
		$kampusdata->namakampus			=Input::get('namakampus');
		$kampusdata->akronim			=Input::get('akronim');
		$kampusdata->wilayah			=Input::get('wilayah');
		$kampusdata->alamat				=Input::get('alamat');
		$kampusdata->website			=Input::get('website');
		$kampusdata->status				=Input::get('status');
		$kampusdata->akreditasi			=Input::get('akreditasi');
		$kampusdata->bahasa				=Input::get('bahasa');
		$kampusdata->kapasitas			=Input::get('kapasitas');
		$kampusdata->fasilitas			=Input::get('fasilitas');
		$kampusdata->biaya				=Input::get('biaya');
		$kampusdata->beasiswa			=Input::get('beasiswa');
		$kampusdata->ujianmasuk			=Input::get('ujianmasuk');
		$kampusdata->fakultas			=Input::get('fakultas');
		$kampusdata->save();
		
		return Redirect::to("kampusdata");
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function lihat($id)
	{
		$kampusdata = Kampusdata::find($id);
		
		return View::make('kampusdata.lihat')->with('data', $kampusdata);
	}
	public function cari($id)
	{
		$kampusdata = Kampusdata::find($id);
		
		return View::make('beranda')->with('data', $kampusdata);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$kampusdata = Kampusdata::find($id);
		return View::make('kampusdata.editdata')->with('data', $kampusdata);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
		return Redirect::to('kampusdata');
	}


}
