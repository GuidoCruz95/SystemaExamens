@extends('app')

 
@section('main-content')
 <div class="box box-primary">
  <div class="responsive">
  <div class="box-header with-border">
  <label class = "box-title">Datos Para Crear Curso</label>
  </div>


{!!Form::open(['route'=>'VistaAlumno.store','method'=>'POST'])!!}
<div class="box-header">
    <div class="col-md-6 mb-3">
       {!! Form::label('Ingrese la Constraseña: ') !!}       
    {!! Form::text('contraseña', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Contraseña del curso']) !!}
    </div>
  </div>

  <div class="box-header">
    <div class="col-md-6 mb-3">
  {!! Form::submit('Inscribirse ', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>

{!! Form::close() !!}
</div>
</div>
@endsection