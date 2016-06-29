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

class ClientBackendController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	public function index()
	{
        $clients = Client::all();
        return view('backend.clienti.index')->with('clients', $clients);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
	public function create()
	{
        return view('backend.clienti.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
	public function store(Request $request)
	{
        $this->validate($request, array(
                'ragione_sociale' => 'required|max:255',
                'descrizione'     => 'max:255',
                'slugcliente'     => 'max:255',
                'logo'            => 'mimes:jpeg,bmp,png'
            )
        );
        
        $client = new Client();

        $client->ragione_sociale = $request->ragione_sociale;
        $client->descrizione     = $request->descrizione;
        $client->slugcliente     = str_slug($request->ragione_sociale, "-");

        $client->save();

        $imageName = $request->file('logo')->getClientOriginalName();
        $path = 'images/'.$client->id.'/'.$imageName;
        $pathdb = 'images/'.$client->id.'/';
        $request->file('logo')->move($pathdb , $imageName);

        $client->logo = $path;
    
        $client->save();

        Session::flash('success', 'Nuovo cliente inserito.');

        return redirect()->route('backend.clienti.show', $client->id); 
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
	public function show($id)
	{
        $client = Client::find($id);
        return view('backend.clienti.show')->with('client', $client);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
	public function edit($id)
	{
        $client = Client::find($id);
        
        return view('backend.clienti.edit')->with('client', $client);

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
                'ragione_sociale' => 'required|max:255',
                'descrizione'     => 'max:255',
                'slugcliente'     => 'max:255',
                'logo'            => 'mimes:jpeg,bmp,png'
            )
        );

        $client = Client::find($id);

        $client->ragione_sociale = $request->ragione_sociale;
        $client->descrizione    = $request->descrizione;
        $client->slugcliente    = str_slug($request->ragione_sociale, "-");

        if($request->hasFile('logo')) {
      
            $imageName = $request->file('logo')->getClientOriginalName();
            $path = 'images/'.$id.'/'.$imageName;
            $pathdb = 'images/'.$id.'/';
            $request->file('logo')->move($pathdb , $imageName);

            $client->logo = $path;

        }
    
        $client->save();

        Session::flash('success', 'Cliente modificato.');

       return redirect()->route('backend.clienti.show', $client->id); 
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
	public function destroy($id)
	{
        $client = Client::find($id);

        $client->delete();
        
        Session::flash('success', 'Lavoro elminato.');

        return redirect()->route('backend.clienti.index');
	}
}