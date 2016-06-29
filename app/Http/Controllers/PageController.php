<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Jenssegers\Agent\Agent;

class PageController extends Controller
{

	public function Home() {

		$works = \App\Work::orderBy('id', 'ASC')->paginate(2);
		$Agent = new Agent();
		
		if ($Agent->isMobile()) {
			return view('frontend.home_mobile', ['works' => $works]);
		} else {
			return view('frontend.home', ['works' => $works]);
		}
	
	}
	public function EverydayHumans() {
		return view('frontend.everydayHumans_pagina');
	}
	public function Servizi() {
		return view('frontend.servizi');
	}
	public function Contatti() {
		return view('frontend.contatti');
	}
}