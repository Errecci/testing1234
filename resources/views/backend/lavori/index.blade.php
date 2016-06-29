@extends('backend.lavori.main')
@section('title', '| Tutti i lavori.')

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<h1 style="float:left">TUTTI I LAVORI</h1>
			<a href="{{ route('backend.lavori.create') }}" class="btn btn-primary btn-h1-spacing pull-right">Inserisci nuovo lavoro</a>
			<hr class="alignment">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Titolo</th>
					<!-- <th>Descrizione</th> -->
					<th>Ordinamento</th>
					<th>Copertina</th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($works as $work)
						<tr>
							<th>{{ $work->id }}</th>
							<td>{{ $work->titolo }}</td>
							<!-- <td>{{ substr($work->descrizione, 0 , 50) }}{{ strlen($work->descrizione) > 50 ? "..." : "" }}</td> -->
							<td> <i><small>prossimamente</small></i> </td>
							<td>
								<div class="x-cell"><img src="/images/lavori/{!! $work->imglavoro !!}" class="img-responsive"></div>
							</td>
							<td>
								<a class="btn btn-success btn-block" href="{{ route('backend.lavori.show', $work->id) }}">Visualizza</a>
								<a class="btn btn-default btn-block" href="{{ route('backend.lavori.edit', $work->id) }}">Modifica</a>		

								{!! Form::open(array('route' => array('backend.lavori.destroy', $work->id), 'method' => 'DELETE')) !!}
									{!! Form::submit('Elimina', array('class' => 'btn btn-danger btn-block mrgT5')) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection