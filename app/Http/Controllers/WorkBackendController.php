<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Work;
use App\Ambito;
use App\Tipologie;
use App\Client;
use Session;
use Input;

class WorkBackendController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	public function index()
	{
        $works = Work::all();
        return view('backend.lavori.index')->with('works', $works);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
	public function create()
	{
    
        $business_list  = Ambito::all()->lists('nome','id');
        $ambito_list    = Tipologie::all()->lists('nome','id');
        $clients_list   = Client::all()->lists('ragione_sociale', 'id');

        return view('backend.lavori.create', ['business_list' => $business_list, 'ambito_list' => $ambito_list, 'clients_list' => $clients_list]);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
	public function store(Request $request)
	{
        //Validazione dati
        $this->validate($request, array(
                'titolo'        => 'required|max:255',
                'descrizione'   => 'required',
                'anno'          => 'required|numeric',
                'url_sito'      => 'max:255',
                'client_id'     => 'required|numeric',
                'ambito_id'     => 'required|numeric',
                'tipologie_id'  => 'required|numeric',
                'imglavoro'     => 'mimes:jpeg,bmp,png'
            )
        );

        //Salvataggio in database
        $works = new Work;

        $works->titolo       = $request->titolo;
        $works->descrizione  = $request->descrizione;
        $works->slug         = str_slug($request->titolo, "-");
        $works->user_id      = '1';
        $works->anno         = $request->anno;
        $works->url_sito     = $request->url_sito;
        $works->client_id    = $request->client_id;
        $works->ambito_id    = $request->ambito_id;
        $works->tipologie_id = $request->tipologie_id;
      
        $imageName = $request->file('imglavoro')->getClientOriginalName();
        $path = 'images/'.$works->client_id.'/'.$works->slug.'/'.$imageName;
        $pathdb = 'images/'.$works->client_id.'/'.$works->slug.'/';
        $request->file('imglavoro')->move($pathdb , $imageName);

        $works->imglavoro = $path;
    
        $works->save();

        Session::flash('success', 'Caricamento Parte 1 avenuto con successo');

        return redirect()->route('backend.lavori.show', $works->id);
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
	public function show($id)
	{
        $work = Work::find($id);
        return view('backend.lavori.show')->with('work', $work);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
	public function edit($id)
	{
        $work           = Work::find($id);
        $business_list  = Ambito::all()->lists('nome','id');
        $ambito_list    = Tipologie::all()->lists('nome','id');
        $clients_list   = Client::all()->lists('ragione_sociale', 'id');
        
        return view('backend.lavori.edit')->with('work', $work)->with('business_list', $business_list)->with('ambito_list', $ambito_list)->with('clients_list', $clients_list);

	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
	{
        $this->validate($request, array(
                'titolo'        => 'required|max:255',
                'descrizione'   => 'required',
                'anno'          => 'required|numeric',
                'url_sito'      => 'max:255',
                'client_id'     => 'required|numeric',
                'ambito_id'     => 'required|numeric',
                'tipologie_id'  => 'required|numeric',
                'imglavoro'     => 'mimes:jpeg,bmp,png'
            )
        );

        $works = Work::find($id);

        $works->titolo       = $request->titolo;
        $works->descrizione  = $request->descrizione;
        $works->slug         = str_slug($request->titolo, "-");
        $works->user_id      = '1';
        $works->anno         = $request->anno;
        $works->url_sito     = $request->url_sito;
        $works->client_id    = $request->client_id;
        $works->ambito_id    = $request->ambito_id;
        $works->tipologie_id = $request->tipologie_id;

        if($request->hasFile('imglavoro')) {
      
            $imageName = $request->file('imglavoro')->getClientOriginalName();
            $path = 'images/'.$works->client_id.'/'.$works->slug.'/'.$imageName;
            $pathdb = 'images/'.$works->client_id.'/'.$works->slug.'/';
            $request->file('imglavoro')->move($pathdb , $imageName);

            $works->imglavoro = $path;

        }
    
        $works->save();

        Session::flash('success', 'Lavoro modificato.');

       return redirect()->route('backend.lavori.show', $works->id); 
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
	public function destroy($id)
	{
        $works = Work::find($id);

        $works->delete();
        
        Session::flash('success', 'Lavoro elminato.');

        return redirect()->route('backend.lavori.index');
	}
}