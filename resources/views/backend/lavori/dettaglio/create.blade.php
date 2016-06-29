@extends('backend.lavori.main')
@section('title', '| Inserimento nuovo lavoro')

	@section('content')
		<div class="row">
			<div class="col-xs-12">
				<h1 style="float:left">INSERISCI DETTAGLIO LAVORO</h1>				
				<a class="btn btn-primary btn-h1-spacing add pull-right">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
				<hr class="alignment">
			</div>
		</div>
		{!! Form::open(array('route' => 'backend.lavori.dettaglio.store','files' => true)) !!}

		<div id="botte">
		<div class="row">
			<div class="col-xs-3">
				<div class="form-group">
					{{ Form::label('titolo', 'Titolo immagine') }}
					{{ Form::text('riga1[titolo]', null, array('class' => 'form-control', 'required' => 'true') )}}

					<!--{!! Form::file('riga1[url_lavoro]', null, array('class'=>'form-control')) !!}-->
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group">
					{!! Form::label('url_lavoro', 'Immagine lavoro') !!}
					{{ Form::text('riga1[url_lavoro]', null, array('class' => 'form-control', 'required' => 'true') )}}
	
				</div>
			</div>
			<div class="col-xs-2">
				<div class="form-group">
					{!! Form::label('colonna', 'Dimensione colonna') !!}
					{!! Form::select('riga1[colonna]', array('full' => 'Full', 'half' => 'Half'), null, array('class' => 'form-control') )!!}
				</div>							
			</div>
			<div class="col-xs-2">
				<div class="form-group">
					{!! Form::label('ordinamento', 'Ordinamento') !!}
					{!! Form::select('riga1[ordinamento]', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'), null, array('class' => 'form-control') )!!}
					<!--{!! Form::selectRange('number', 1, 10, null, array('class' => 'form-control') )!!}-->
				</div>
			</div>
			<div class="col-xs-1">
				<div class="form-group text-right">
					{{ Form::hidden('riga1[work_id]', $_GET['lavoro'], array('work_id' => 'work_id')) }}
					{!! Form::label('Elimina', 'Elimina') !!}
					<button type="button" class="btn btn-danger">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3">
				<div class="form-group">
					{{ Form::label('titolo', 'Titolo immagine') }}
					{{ Form::text('riga2[titolo]', null, array('class' => 'form-control', 'required' => 'true') )}}

				
					<!--{!! Form::file('riga2[url_lavoro]', null, array('class'=>'form-control')) !!}		-->
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group">
					
					{!! Form::label('url_lavoro', 'Immagine lavoro') !!}
					{{ Form::text('riga1[url_lavoro]', null, array('class' => 'form-control', 'required' => 'true') )}}

				</div>
			</div>
			<div class="col-xs-2">
				<div class="form-group">
					{!! Form::label('colonna', 'Dimensione colonna') !!}
					{!! Form::select('riga2[colonna]', array('full' => 'Full', 'half' => 'Half'), null, array('class' => 'form-control') )!!}
				</div>							
			</div>
			<div class="col-xs-2">
				<div class="form-group">
					{!! Form::label('ordinamento', 'Ordinamento') !!}
					{!! Form::select('riga2[ordinamento]', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'), null, array('class' => 'form-control') )!!}
					<!--{!! Form::selectRange('number', 1, 10, null, array('class' => 'form-control') )!!}-->
				</div>
			</div>
			<div class="col-xs-1">
				<div class="form-group text-right">
					{{ Form::hidden('riga2[work_id]', $_GET['lavoro'], array('work_id' => 'work_id')) }}
					{!! Form::label('Elimina', 'Elimina') !!}
					<button type="button" class="btn btn-danger">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					
					{{ Form::submit('Salva', array('class' => 'btn btn-success pull-right', 'style' => 'margin-top:20px')) }}
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


$(function() {
	var scntDiv = $('#botte');
    var i = $('#botte .row').size() + 1;
    
    $('.add').on('click', function() {
    	i++;
		$('<div class="row added"><div class="col-xs-3"><div class="form-group">{!! Form::label("url_lavoro", "Immagine lavoro") !!}{!! Form::file("riga' + i +'[url_lavoro]", null, array("class"=>"form-control")) !!}</div></div><div class="col-xs-4"><div class="form-group">{{ Form::label("titolo", "Titolo immagine") }}{{ Form::text("riga' + i +'[titolo]", null, array("class" => "form-control", "required" => "true") )}}</div></div><div class="col-xs-2"><div class="form-group">{!! Form::label("colonna", "Dimensione colonna") !!}{!! Form::select("riga' + i +'[colonna]", array("full" => "Full", "half" => "Half"), null, array("class" => "form-control") )!!}</div></div><div class="col-xs-2"><div class="form-group">{!! Form::label("ordinamento", "Ordinamento") !!}{!! Form::select("riga' + i +'[ordinamento]", array("1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10"), null, array("class" => "form-control") )!!}</div></div><div class="col-xs-1"><div class="form-group text-right">{!! Form::label("Elimina", "Elimina") !!}<button type="button" class="btn btn-danger delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div></div></div>').appendTo(scntDiv);
        
        console.log(i)
        return false;
    });   
	$('.delete').on('click', function() { 

            $(this).parent().parent().parent().remove();


		return false;
    });
});
/*
			$(function(){
				var i = 2;
				$('.add').click(function(){					
					var newLine = '<div class="row added">'+
									'<div class="col-xs-3">' +
										'<div class="form-group">' +
											'{!! Form::label("url_lavoro", "Immagine lavoro") !!}' +
											'{!! Form::file("riga[".'+i+'."][url_lavoro]", null, array("class"=>"form-control")) !!}' +
										'</div>' +
									'</div>' +
									'<div class="col-xs-4">' +
										'<div class="form-group">' +
											'{{ Form::label("titolo", "Titolo immagine") }}' +
											'{{ Form::text("riga".'+i+'."[titolo]", null, array("class" => "form-control", "required" => "true") )}}' +
										'</div>' +
									'</div>' +
									'<div class="col-xs-2">' +
										'<div class="form-group">' +
											'{!! Form::label("colonna", "Dimensione colonna") !!}' +
											'{!! Form::select("riga".'+i+'."[colonna]", array("full" => "Full", "half" => "Half"), null, array("class" => "form-control") )!!}' +
										'</div>' +
									'</div>' +
									'<div class="col-xs-2">' +
										'<div class="form-group">' +
											'{!! Form::label("ordinamento", "Ordinamento") !!}' +
											'{!! Form::select("riga".'+i+'."[ordinamento]", array("1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10"), null, array("class" => "form-control") )!!}' +
										'</div>' +
									'</div>' +
									'<div class="col-xs-1">' +
										'<div class="form-group text-right">' +
											'{!! Form::label("Elimina", "Elimina") !!}' +
											'<button type="button" class="btn btn-danger delete">' +
												'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>' +
											'</button>' +
										'</div>' +
									'</div>' +
								'</div>';
								
								$('.prova').append(newLine);
								i++;
								$('.delete').click(function() {
									$(this).parent().parent().parent().remove();
								});
				});
			});
*/
		</script>
	@endsection