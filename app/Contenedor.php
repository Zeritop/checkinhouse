<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenedor extends Model
{
    protected $fillable = [
        'cod_contenedor', 'nombre_contenedor', 'capacidad_contenedor', 'nombre_taller_contenedor'
    ];

      
}
