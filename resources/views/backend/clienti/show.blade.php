@extends('backend.clienti.main')

@section('title', '| Scheda cliente.')

@section('content')
	<div class="row">
		<div class="col-xs-12"></div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h1>Scheda cliente</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2>{{ $client->ragione_sociale }}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-9">
			<dl>
				<dt>Nome cliente</dt>
				<dd>{{ $client->ragione_sociale }}</dd>

				<dt>Descrizione:</dt>
				<dd>{!! $client->descrizione !!}</dd>

				<dt>SLUG</dt>
				<dd>{{ $client->slugcliente }}</dd>
			</dl>
		</div>
		<div class="col-xs-3">
			<dl>
				<dt class="text-center">Logo:</dt>
				<dd><img src="/{!! $client->logo !!}" class="img-responsive center-block"></dd>
			</dl>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 text-right selector">
			{!! Html::linkRoute('backend.clienti.index', 'Annulla', null, array('class' => 'btn btn-default')) !!}
			{!! Html::linkRoute('backend.clienti.edit', 'Modifica', array($client->id), array('class' => 'btn btn-warning')) !!}

			{!! Form::open(array('route' => array('backend.clienti.destroy', $client->id), 'method' => 'DELETE')) !!}
				{!! Form::submit('Elimina', array('class' => 'btn btn-danger pull-right')) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection