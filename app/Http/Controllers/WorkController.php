<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Jenssegers\Agent\Agent;

//use Illuminate\Database\Eloquent\ModelNotFoundException;

/*
class WorkController extends Controller
{
	//protected $posts_per_page = 9;

	public function work() {	
		$works = \App\Work::simplePaginate(9);
		// Lista clienti per filtro
		$clients_list = \App\Client::orderBy('ragione_sociale', 'ASC')->get();
		// Lista Business(ambito su DB) per filtro
		$business_list = \App\Ambito::orderBy('nome', 'ASC')->get();
		// Lista Ambito(tipologie su DB) per filtro
		$ambito_list = \App\Tipologie::orderBy('nome', 'ASC')->get();
		return view('frontend.progetti', ['works' => $works, 'clients_list' => $clients_list, 'business_list' => $business_list, 'ambito_list' => $ambito_list]);
	}
}
*/

class WorkController extends Controller
{
	protected $posts_per_page = 8;
	
	public function work(Request $request) {	
		
		$works = \App\Work::simplePaginate($this->posts_per_page);

		// Lista clienti per filtro
		//	$clients_list = \App\Client::orderBy('ragione_sociale', 'ASC')->get();
		
		// Lista Business(ambito su DB) per filtro
		$business_list = \App\Ambito::orderBy('nome', 'ASC')->get();
		
		// Lista Ambito(tipologie su DB) per filtro
		$ambito_list = \App\Tipologie::orderBy('nome', 'ASC')->get();




	if($request->ajax()) {

         
			return response()->json([
				'works' => view('frontend.progetti_ajax')->with(compact('works'))->render(),
				'next_page' => $works->nextPageUrl()
			]);

	

	} 
	


		
		
		$Agent = new Agent();
		
		if ($Agent->isMobile()) {
			return view('frontend.progetti_mobile', [ 'business_list' => $business_list, 'ambito_list' => $ambito_list])->with(compact('works'));
		} else {
			return view('frontend.progetti', [ 'business_list' => $business_list, 'ambito_list' => $ambito_list])->with(compact('works'));
		}

	

		

	}
    
}