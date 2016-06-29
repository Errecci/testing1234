<?php


	// Home *******
	Route::get('/', 'PageController@Home');
	// Everyday Humans *******
	Route::get('/everyday-humans', 'PageController@EverydayHumans');
	// Servizi *******
	Route::get('/servizi', 'PageController@Servizi');
	// Clienti *******
	Route::get('/clienti', 'ClientController@client');
		// Dettaglio cliente
		Route::get('/progetti/{slugcliente}', 'DetailClientController@DetailClient');
	// Progetti *******
	Route::get('/progetti', 'WorkController@work');
		// Progetti filtrati per Business ******* 
		Route::get('/progetti/business/{slugambito}', 'BusinessFilterWorkController@BusinessFilter');
		// Progetti filtrati per Ambito ******* 
		Route::get('/progetti/ambito/{slugtipologie}', 'AmbitoFilterWorkController@AmbitoFilter');
		// Dettaglio Progetti *******
		Route::get('/progetti/{slugcliente}/{slug}', 'insideWorkController@detailWork');
	// Contatti *******
	Route::get('/contatti', 'PageController@Contatti');


	// Prova Backend
	Route::group(array('prefix' => 'backend'), function(){
		Route::resource('lavori', 'WorkBackendController');
	});
	Route::group(array('prefix' => 'backend/lavori'), function(){
		Route::resource('dettaglio', 'WorkDetailBackendController');
	});
	Route::group(array('prefix' => 'backend'), function(){
		Route::resource('clienti', 'ClientBackendController');
	});








/*
Route::group(array('prefix' => 'backend'), function() {
	Route::resource('lavori', 'manageWorkController');
});
*/

Route::auth();
Route::get('/home', 'HomeController@index');