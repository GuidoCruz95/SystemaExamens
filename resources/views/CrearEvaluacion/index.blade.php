@extends('app')

 
@section('main-content')
 <div class="box box-primary">
  <div class="table-responsive">
  <div class="box-header with-border">
  <label class = "box-title">Crear Evaluacion</label>
  </div>
<div class="box-header">
  	<div class="col-md-6 mb-3">
	{!!Form::label('Elija la evaluación que quiere crear')!!}
	{!!Form::select('evaluaciones',['examen'=>'Examen','proyecto'=>'Proyecto'],null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione Evaluacion'])!!} 
	</div>
</div>

<div class="box-header">
  	<div class="col-md-6 mb-3">
	<a href="{{route('VistaExamenes.index')}}" class="btn btn-primary"><span aria-hidden="true"></span>Crear Evaluación</a>
  	</div>
  </div>
</div>
</div>

@endsection

