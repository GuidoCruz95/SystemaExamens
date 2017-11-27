<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEvaluacion extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipo_evaluacions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_evaluacion', 'nombre'];
}
