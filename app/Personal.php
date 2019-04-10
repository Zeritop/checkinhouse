<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = [
        'cod_pers', 'rut_pers', 'nom_pers', 'ape_pers', 'dir_pers', 'tel_pers'
    ];
    
    //query Scope

    public function scopeRut($query, $rut_pers){

    	if($rut_pers)
    		return $query->where('rut_pers', $rut_pers);
    }

    public function scopeNombre($query, $nombre){

    	if($nombre)
    		return $query->where('nom_pers', $nombre);
    }
}
