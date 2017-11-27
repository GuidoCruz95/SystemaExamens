@extends('app')

 
@section('main-content')
 <div class="box box-primary">
  <div class="table-responsive">
  <div class="box-header with-border">
  <label class = "box-title">Lista De Cursos</label>
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
    <th>Nombre Curso</th>
    <th>Tipo de Curso</th>
    <th>Docente</th>
    <th>Ver Curso</th>
  </thead>
  <tbody>
      <tr>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td>
  		<a href="#" class="btn btn-primary"><span aria-hidden="true"></span>Ver Curso</a>
  		</td>
      </tr>
  </tbody>
  </table>
</div>
</div>
</div>
</div>

 @endsection