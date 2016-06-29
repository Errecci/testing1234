<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
	public function client() {
		$clients = \App\Client::orderBy('slugcliente', 'ASC')->get();
		return view('frontend.clienti', ['clients' => $clients]);
	}
}