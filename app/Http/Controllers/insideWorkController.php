<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Database\Eloquent\ModelNotFoundException;


class insideWorkController extends Controller
{
	public function detailWork($slugcliente, $slug) {	
		$works = \App\Work::where('slug', $slug)->first();
		//Stesso cliente.
		$works_all = \App\Work::where('client_id','=', $works->client->id)->where('slug','<>', $slug)->where('id','>', $works->id)->orderBy('id', 'ASC')->paginate(1);
		$works_all_business = array();
		//Controllo se esiste il lavoro precedente, altrimenti eseguo la query al contrario.
		if ($works_all->isEmpty()) {
			$works_all = \App\Work::where('client_id','=', $works->client->id)->where('slug','<>', $slug)->where('id','<', $works->id)->orderBy('id', 'ASC')->paginate(1);
			//Se non ci sono altri lavori, continuo con un altro cliente dello stesso Ambito.
			if ($works_all->count() < 2) {
				$works_all = array();
				$works_all_business = \App\Work::where('ambito_id', '=' , $works->ambito->id)->where('slug','<>', $slug)->where('client_id','<>', $works->client->id)->paginate(1);
			}
		}
		// Stessa Tipologia
		$works_tipo = \App\Work::where('client_id','<>', $works->client->id)->where('tipologie_id','=', $works->tipologie_id)->orderBy('id', 'DESC')->paginate(1);
		return view('frontend.dettaglioprogetti', ['works' => $works, 'works_all' => $works_all, 'works_all_business' => $works_all_business, 'works_tipo' => $works_tipo]);
	}
}