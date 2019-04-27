<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatServ extends Model
{
    protected $fillable = [
        'nombre', 'titulo', 'descripcion', 'foto'
    ];
    
      //query Scope

    public function scopeRut($query, $rut_cli){

    	if($rut_cli)
    		return $query->where('rut_cli', $rut_cli);
    }

    public function scopeNombre($query, $nombre){

    	if($nombre)
    		return $query->where('nom_cli', $nombre);
    }
}