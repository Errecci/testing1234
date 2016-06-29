@extends('backend.lavori.main')

@section('title', '| Risultato inserimento.')

@section('content')
	<div class="row">
		<div class="col-xs-12"></div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h1>Scheda lavoro</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2>{{ $work->titolo }}</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<dl>
				<dt>Descrizione:</dt>
				<dd>{!! $work->descrizione !!}</dd>

				<dt>Anno di pubblicazione:</dt>
				<dd>{{ $work->anno }}</dd>

				<dt>ID Cliente</dt>
				<dd>{{ $work->client_id }}</dd>

				<dt>ID Business</dt>
				<dd>{{ $work->ambito_id }}</dd>

				<dt>ID Ambito</dt>
				<dd>{{ $work->tipologie_id }}</dd>

				<dt>Sito web:</dt>
				<dd>{{ $work->url_sito }}</dd>
			</dl>
		</div>
		<div class="col-xs-6">
			<dl>
				<dt>Immagine di copertina:</dt>
				<dd><img src="/images/lavori/{!! $work->imglavoro !!}" class="img-responsive center-block"></dd>
			</dl>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 text-right selector">
			{!! Html::linkRoute('backend.lavori.index', 'Annulla', null, array('class' => 'btn btn-default')) !!}
			{!! Html::linkRoute('backend.lavori.edit', 'Modifica', array($work->id), array('class' => 'btn btn-warning')) !!}

			{!! Form::open(array('route' => array('backend.lavori.destroy', $work->id), 'method' => 'DELETE')) !!}
				{!! Form::submit('Elimina', array('class' => 'btn btn-danger pull-right')) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection