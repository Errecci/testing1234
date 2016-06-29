<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Database\Eloquent\ModelNotFoundException;


class AmbitoFilterWorkController extends Controller
{
	public function AmbitoFilter($slugtipologie) {	
		$tipologia = \App\Tipologie::where('slugtipologie', '=', $slugtipologie)->first();
		// Lista Business(ambito su DB) per filtro
		$business_list = \App\Ambito::orderBy('nome', 'ASC')->get();
		// Lista Ambito(tipologie su DB) per filtro
		$ambito_list = \App\Tipologie::orderBy('nome', 'ASC')->get();
		return view('frontend.ambito', ['tipologia' => $tipologia, 'business_list' => $business_list, 'ambito_list' => $ambito_list]);
	}
}