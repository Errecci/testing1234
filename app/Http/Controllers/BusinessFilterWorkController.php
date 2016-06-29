<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Database\Eloquent\ModelNotFoundException;


class BusinessFilterWorkController extends Controller
{
	public function BusinessFilter($slugambito) {			
		$ambito = \App\Ambito::where('slugambito', '=', $slugambito)->first();
		// Lista Business(ambito su DB) per filtro
		$business_list = \App\Ambito::orderBy('nome', 'ASC')->get();
		// Lista Ambito(tipologie su DB) per filtro
		$ambito_list = \App\Tipologie::orderBy('nome', 'ASC')->get();

		return view('frontend.business', ['ambito' => $ambito, 'business_list' => $business_list, 'ambito_list' => $ambito_list]);
	}
}