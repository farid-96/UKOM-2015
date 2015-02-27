<?php

class DaftarkampusController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datakampu =Datakampus::All();
		return View::make("daftarkampus.index")->with('data', $daftarkampu);
	}
}