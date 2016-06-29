@extends('backend.clienti.main')

@section('title', '| MODIFICA | {{ $client->ragione_sociale }} ')

@section('content')
	<div class="row">
		<div class="col-xs-12"></div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h1>MODIFICA | {{ $client->ragione_sociale }} </h1>
			<hr>
		</div>
	</div>
	{!! Form::model($client, array('route' => array('backend.clienti.update', $client->id), 'method' => 'PATCH', 'files' => true)) !!}
	<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
				{{ Form::label('ragione_sociale', 'Nome cliente') }}
				{{ Form::text('ragione_sociale', null, array('class' => 'form-control', 'required' => 'true') )}}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-9">
				<div class="form-group">
				{{ Form::label('descrizione', 'Descrizione cliente') }}
				{{ Form::textarea('descrizione', null, array('class' => 'form-control') )}}
				</div>
			</div>
			<div class="col-xs-3">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							{!! Form::label(' ', 'Logo attuale') !!}
							<img src="/{!! $client->logo !!}" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							{!! Form::label('logo', 'Modifica logo') !!}
							{!! Form::file('logo', null, array('class'=>'form-control')) !!}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							{!! Html::linkRoute('backend.clienti.show', 'Annulla', array($client->id), array('class' => 'btn btn-danger')) !!}
							{{ Form::submit('Salva', array('class' => 'btn btn-success pull-right')) }}
						</div>
					</div>
				</div>
			</div>
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