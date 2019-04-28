<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'precio'
    ];
    
      //query Scope

    public function scopeId($query, $id){

    	if($id)
    		return $query->where('id', $id);
    }

    public function scopeNombre($query, $nombre){

    	if($nombre)
    		return $query->where('nombre', $nombre);
    }
}
