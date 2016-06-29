@extends('backend.clienti.main')
@section('title', '| Inserimento nuovo cliente')

	@section('content')
		<div class="row">
			<div class="col-xs-12">
				<h1>INSERISCI NUOVO CLIENTE</h1>
				<hr>
			</div>
		</div>
		{!! Form::open(array('route' => 'backend.clienti.store','files' => true)) !!}
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						{{ Form::label('ragione_sociale', 'Nome cliente') }}
						{{ Form::text('ragione_sociale', null, array('class' => 'form-control', 'required' => 'true') )}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						{{ Form::label('descrizione', 'Descrizione cliente') }}
						{{ Form::textarea('descrizione', null, array('class' => 'form-control') )}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10">
					<div class="form-group">
						{!! Form::label('logo', 'Inserisci logo') !!}
						{!! Form::file('logo', null, array('class'=>'form-control')) !!}
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						{{ Form::submit('Avanti', array('class' => 'btn btn-success pull-right', 'style' => 'margin-top:20px')) }}
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