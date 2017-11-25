<?php

namespace Veterinaria\models;

use Illuminate\Database\Eloquent\Model;

class expediente extends Model
{
    protected $table='expediente';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=['id','fecha','veterinario','titulo','contenido'];
}
