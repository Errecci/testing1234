@extends('backend.clienti.main')
@section('title', '| Tutti i lavori.')

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<h1 style="float:left">TUTTI I CLIENTI</h1>
			<a href="{{ route('backend.clienti.create') }}" class="btn btn-primary btn-h1-spacing pull-right">Inserisci nuovo lavoro</a>
			<hr class="alignment">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Ragione Sociale</th>
					<th>SLUG</th>
					<th style="width:263px"></th>
				</thead>
				<tbody>
					@foreach ($clients as $client)
						<tr>
							<th>{{ $client->id }}</th>
							<td>{{ $client->ragione_sociale }}</td>
							<td>{{ $client->slugcliente }}</td>
							<td class="selector" style="width:263px">
								<a class="btn btn-success" href="{{ route('backend.clienti.show', $client->id) }}">Visualizza</a>
								<a class="btn btn-default" href="{{ route('backend.clienti.edit', $client->id) }}">Modifica</a>		

								{!! Form::open(array('route' => array('backend.clienti.destroy', $client->id), 'method' => 'DELETE')) !!}
									{!! Form::submit('Elimina', array('class' => 'btn btn-danger  mrgT5', 'style' => 'margin-top:-1px')) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection