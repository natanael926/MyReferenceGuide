<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class SubscriptionController extends Controller 
{


	public function index() 
	{
		return 'hola mundo';
	}

	public function show(int $id)
	{
		dd($id);
	}

	public function store(Request $request)
	{
		dd($request->all());
	}

}