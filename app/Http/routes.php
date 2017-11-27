<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

//Route::resource('/','principalController@inicio');

Route::resource('admin/permissions', 'Admin\\PermissionsController');
Route::resource('admin/roles', 'Admin\\RolesController');
Route::resource('admin/users', 'Admin\\UsersController');

Route::resource('CrearCurso', 'CrearCurso\\CrearCursoController');

Route::resource('CrearEvaluacion', 'CrearEvaluacion\\CrearEvaluacionController');

Route::resource('InscribirseCurso', 'InscribirseCurso\\InscribirseCursoController');

Route::resource('VistaAlumno', 'VistaAlumno\\VistaAlumnoController');




