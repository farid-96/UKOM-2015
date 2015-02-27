<?php

class BerandaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make("beranda.index");
	}
	public function cari($id)
	{
		$kampusdata = Kampusdata::find($id);
		
		return View::make('beranda.cari')->with('data', $kampusdata);
	}
}