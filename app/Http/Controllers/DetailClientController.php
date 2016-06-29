<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Database\Eloquent\ModelNotFoundException;


class DetailClientController extends Controller
{
	public function DetailClient($slugcliente) {	
		$clients = \App\Client::where('slugcliente', '=', $slugcliente)->first();
		return view('frontend.cliente', ['clients' => $clients]);
	}
}