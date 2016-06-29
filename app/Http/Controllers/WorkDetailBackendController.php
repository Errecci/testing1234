<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Work;
use App\Ambito;
use App\Tipologie;
use App\Client;
use App\Image;
//use Session;
//use Input;

class WorkDetailBackendController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {      
        return view('backend.lavori.dettaglio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
/*      
        // Nella versione con inserimento di una singola riga su DB non ci sono problemi //
        $images = new Image;
        $images->titolo        = $request->titolo;
        $images->colonna       = $request->colonna;
        $images->ordinamento   = $request->ordinamento;
        $images->work_id       = $request->work_id;

        $imageName = $request->file('url_lavoro')->getClientOriginalName();
        $path = 'images/prova/'.$imageName;
        $pathdb = 'images/prova/';
        $request->file('url_lavoro')->move($pathdb , $imageName);
        $images->url_lavoro = $path;

        $images->save(); 
*/    
        

        $images = new Image;

        $images->fill($request->all());

        $images->save();
        //  dump($request);
        //return response()->json($request);    

/*

        Session::flash('success', 'Caricamento Parte 1 avenuto con successo');

        return redirect()->route('backend.lavori.dettaglio.show');
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}