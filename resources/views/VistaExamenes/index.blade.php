@extends('app')

 
@section('main-content')
 <div class="box box-primary">
  <div class="table-responsive">
  <div class="box-header with-border">
  <label class = "box-title">Crear Examen</label>
  </div>

<div class="box-header">
  <a href="{{route('VistaSeleccionSimple.create')}}" class="btn btn-primary"><span aria-hidden="true"></span>Seleccion Simple</a>
  <a href="{{route('VistaSeleccionMultiple.create')}}" class="btn btn-primary"><span aria-hidden="true"></span>Seleccion Multiple</a>
  <a href="{{route('VistaFalsoVerdadero.create')}}" class="btn btn-primary"><span aria-hidden="true"></span>Falso o Vedadero</a>
  <a href="{{route('VistaSubirArchivo.create')}}" class="btn btn-primary"><span aria-hidden="true"></span>Subir Archivo</a>
  <a href="{{route('VistaOrdenar.create')}}" class="btn btn-primary"><span aria-hidden="true"></span>Ordenar</a>
  <a href="{{route('VistaCompletar.create')}}" class="btn btn-primary"><span aria-hidden="true"></span>Completar</a>


</div>
  <!-- Buscador de ambiente-->
  {!! Form::open(['route'=>'CrearCurso.index','method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
  <div class="input-group col-md-6 pull-right">
  <span class="input-group-addon"><i class="fa fa-search"></i></span>
          {!! Form::text('name',null,['class'=>'form-control','placelhoder'=>'Buscar ambiente...','aria-describebdy'=>'search']) !!}
 </div>
  {!! Form::close() !!}
<!--Fin de buscador -->
 
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table table-striped table-bordered table-condensed table-hover">
  <thead>
    <th>Nombre Pregunta</th>
    <th>Nota</th>
    <th>Acciones</th>
  </thead>
  <tbody>
      <tr>
  		<td></td>
  		<td></td>
  		<td>
        <a href="#" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
      </td>
      </tr>
  </tbody>
  </table>
</div>
</div>
</div>
</div>

 @endsection