<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
     protected $fillable = [
        'cod_dom', 'dir_dom'
    ];
    
    //query Scope

    public function scopeCod($query, $cod_dom){

    	if($cod_dom)
    		return $query->where('cod_dom', $cod_dom);
    }

    public function scopeDireccion($query, $direccion){

    	if($direccion)
    		return $query->where('dir_dom', $direccion);
    }
}
