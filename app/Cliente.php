<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'rut_cli', 'nom_cli', 'ape_cli', 'tel_cli', 'mail_cli', 'cod_dom_cli'
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
