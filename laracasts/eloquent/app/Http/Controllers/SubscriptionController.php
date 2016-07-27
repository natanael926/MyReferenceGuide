<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SubscriptionController extends Controller 
{

	/**
	 * Create a new controller instance
	 * 
	 * @return void
	 */
	public function __construct()
	{

	}

	public function index() 
	{
		return 'hola mundo';
	}

	public function show(int $id)
	{
		dd($id);
	}

}