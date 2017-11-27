<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documentos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario', 'id_evaluacion', 'documento'];
}
