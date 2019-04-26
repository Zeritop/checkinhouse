<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $fillable = [
        'nombre', 'cantidad', 'descripcion', 'medidas', 'codigo'
    ];
    
      //query Scope

    public function scopeNombre($query, $nombre){

    	if($nombre)
    		return $query->where('nombre', $nombre);
    }

    public function scopeCodigo($query, $codigo){

    	if($codigo)
    		return $query->where('codigo', $codigo);
    }
}