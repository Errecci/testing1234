@extends('backend.lavori.main')

@section('title', '| MODIFICA | {{ $work->titolo }} ')

@section('content')
	<div class="row">
		<div class="col-xs-12"></div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h1>MODIFICA | {{ $work->titolo }} </h1>
			<hr>
		</div>
	</div>
	{!! Form::model($work, array('route' => array('backend.lavori.update', $work->id), 'method' => 'PATCH', 'files' => true)) !!}
	<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
				{{ Form::label('titolo', 'Titolo lavoro') }}
				{{ Form::text('titolo', null, array('class' => 'form-control', 'required' => 'true') )}}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
				{{ Form::label('descrizione', 'Descrizione lavoro') }}
				{{ Form::textarea('descrizione', null, array('class' => 'form-control') )}}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<img src="/images/lavori/{!! $work->imglavoro !!}" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="row">
					<div class="col-xs-4">
						<div class="form-group">
							{{ Form::label('client_id', 'Seleziona cliente') }}
							{{ Form::select('client_id', $clients_list, null, array('class' => 'form-control') )}}
						</div>
					</div>
					<div class="col-xs-4">
						<div class="form-group">
							{{ Form::label('ambito_id', 'Seleziona business') }}
							{{ Form::select('ambito_id', $business_list ,null, array('class' => 'form-control') )}}
						</div>
					</div>
					<div class="col-xs-4">
						<div class="form-group">
							{{ Form::label('tipologie_id', 'Seleziona ambito') }}
							{{ Form::select('tipologie_id', $ambito_list ,null, array('class' => 'form-control') )}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="form-group">
							{{ Form::label('url_sito', 'Indirizzo sito web') }}
							{{ Form::text('url_sito', null, array('class' => 'form-control') )}}
						</div>
					</div>
					<div class="col-xs-4">
						<div class="form-group">
							{{ Form::label('anno', 'Anno di publicazione') }}
							{{ Form::text('anno', null, array('class' => 'form-control', 'required' => 'true') )}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10">
				<div class="form-group">
					{!! Form::label('imglavoro', 'Immagine di copertina') !!}
					{!! Form::file('imglavoro', null, array('class'=>'form-control')) !!}
				</div>
			</div>
			<div class="col-xs-2">
				<div class="form-group">
					{!! Html::linkRoute('backend.lavori.show', 'Annulla', array($work->id), array('class' => 'btn btn-danger')) !!}
					{{ Form::submit('Salva', array('class' => 'btn btn-success pull-right')) }}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-right"></div>
		</div>
	{!! Form::close() !!}
@endsection	
@section('moreScripts')
	<script src="http://cdn.tinymce.com/4/tinymce.min.js" type="text/javascript"></script>
	<script>
		tinymce.init({ 
			selector:'textarea',
			plugins: "code",
			toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code"
		});
	</script>
@endsection