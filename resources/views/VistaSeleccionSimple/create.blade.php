@extends('app')

 
@section('main-content')
 <div class="box box-primary">
  <div class="responsive">
  <div class="box-header with-border">
  <label class = "box-title">Crear Seleccion Simple</label>
  </div>
{!!Form::open(['route'=>'VistaSeleccionSimple.store','method'=>'POST'])!!}

<div class="box-header">
  		<div class="form-gorup col-md-6">
    <label>Pregunta</label>
    <textarea class="form-control" id="pregunta"></textarea>
	</div>

	<div class="form-gorup col-md-2">
		<label>Nota De Pregunta</label>
      <input type="text" class="form-control" id="nota">
	</div>
  	</div>

  	<div class="box-header with-border">
  <label class = "box-title">Ingrese sus posibles respuestas </label>
  </div>

<div class="box-header">
	<div class="form-gorup col-md-6">
		<div class="input-group">
		<span class="input-group-addon">
			<input type="checkbox" name="">
		</span>
		<input type="text" class="form-control" name="">
		</div>
	</div>
	<a href="" class="btn btn-primary">+</a>
	<a href="" class="btn btn-primary">-</a>
</div>

<div class="box-header">
	<div class="form-gorup col-md-6">
		<div class="input-group">
		<span class="input-group-addon">
			<input type="checkbox" name="">
		</span>
		<input type="text" class="form-control" name="">
		</div>
	</div>
</div>

<div class="box-header">
	<div class="form-gorup col-md-6">
		<div class="input-group">
		<span class="input-group-addon">
			<input type="checkbox" name="">
		</span>
		<input type="text" class="form-control" name="">
		</div>
	</div>
</div>

<div class="box-header">
	<div class="form-gorup col-md-6">
		<div class="input-group">
		<span class="input-group-addon">
			<input type="checkbox" name="">
		</span>
		<input type="text" class="form-control" name="">
		</div>
	</div>
</div>
<div class="box-header">
    <div class="col-md-6 mb-3">
    	<a href="{{route('VistaExamenes.index')}}" class="btn btn-danger"><span aria-hidden="true"></span>Cancelar</a>
    	
  {!! Form::submit('Crear Pregunta ', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>

{!! Form::close() !!}
  	
</div>
</div>
@endsection