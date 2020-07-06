<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHerramienta extends Model
{
    protected $fillable = [
        'id', 'nombre_th', 'descripcion_th'
    ];


}
