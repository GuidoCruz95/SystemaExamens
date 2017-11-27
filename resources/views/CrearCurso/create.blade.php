@extends('app')

 
@section('main-content')
 <div class="box box-primary">
  <div class="responsive">
  <div class="box-header with-border">
  <label class = "box-title">Datos Para Crear Curso</label>
  </div>

  {!!Form::open(['route'=>'CrearCurso.store','method'=>'POST'])!!}


  <div class="box-header">
    <div class="form-group col-md-2 mb-3">
    {!! Form::label('Nombre: ') !!}       
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del curso']) !!}
    </div>
    <div class="form-group col-md-2 mb-3">
       {!! Form::label('Contraseña: ') !!}       
    {!! Form::text('contraseña', null, ['class' => 'form-control','placeholder' => 'Contraseña del curso']) !!}
    </div>
  </div>

  <div class="box-header">
    <div class="col-md-6 mb-3">
  {!!Form::label('Descripción')!!}
  {!!Form::textarea('descripcion',null, ['class' => 'form-control', 'placeholder' => 'Descripción del curso'])!!}     
    </div>
  </div>

  <div class="box box-primary">
    <div class="box-header with-border">
  <label class = "box-title">Añadir Tipos De Evalación</label>
  </div>
    <div class="box-header">
    <div class="col-md-2 mb-3">
  {!!Form::label('Evaluaciones')!!}
  {!!Form::select('evaluacion',['examen'=>'Examen','proyecot'=>'Proyecto'],null, ['class' => 'form-control', 'placeholder' => 'Seleccione Evaluacion'])!!} 
  </div>
    <div class="col-md-1 mb-3">
      {!!Form::label('Nota')!!}
  {!!Form::text('nota', null, ['class' => 'form-control']) !!}
    </div>
</div>
   <div class="box-header">
     <div class="col-md-2 mb-3">
  {!!Form::select('evaluacion',['examen'=>'Examen','proyecot'=>'Proyecto'],null, ['class' => 'form-control', 'placeholder' => 'Seleccione Evaluacion'])!!} 
  </div>
    <div class="col-md-1 mb-3">
  {!!Form::text('nota', null, ['class' => 'form-control']) !!}
    </div>
  </div>

   <div class="box-header">
     <div class="col-md-2 mb-3">
  {!!Form::select('evaluacion',['examen'=>'Examen','proyecot'=>'Proyecto'],null, ['class' => 'form-control', 'placeholder' => 'Seleccione Evaluacion'])!!} 
  </div>
    <div class="col-md-1 mb-3">
  {!!Form::text('nota', null, ['class' => 'form-control']) !!}
    </div>
  </div>
    
  </div>

  <div class="box-header">
    <div class="col-md-6 mb-3">
  {!! Form::submit('Crear Curso ', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>

{!! Form::close() !!}

  	
  </div>
</div>
@endsection