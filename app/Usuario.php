<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'rut_usu', 'nom_usu', 'ape_usu', 'tel_usu', 'mail_usu', 'clave'
    ];
    
      //query Scope

    public function scopeRut($query, $rut_usu){

    	if($rut_usu)
    		return $query->where('rut_usu', $rut_usu);
    }

    public function scopeNombre($query, $nombre){

    	if($nombre)
    		return $query->where('nom_usu', $nombre);
    }
}
