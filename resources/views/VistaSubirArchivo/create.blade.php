@extends('app')

 
@section('main-content')
 <div class="box box-primary">
  <div class="responsive">
  <div class="box-header with-border">
  <label class = "box-title">Crear Pregunta de subir archivo</label>
  </div>
{!!Form::open(['route'=>'VistaSeleccionMultiple.store','method'=>'POST'])!!}

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