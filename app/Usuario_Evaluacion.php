<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_Evaluacion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuario_evaluacions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario_estudiante', 'id_evaluacion', 'nota_general'];
}
