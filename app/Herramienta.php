<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $fillable = [
        'cod_her', 'nom_her', 'vida_her', 'marca_her', 'cod_taller'
    ];
    
      //query Scope

    public function scopeCod($query, $cod_her){

    	if($cod_her)
    		return $query->where('cod_her', $cod_her);
    }

    public function scopeNombre($query, $nombre){

    	if($nombre)
    		return $query->where('nom_her', $nombre);
    }
}