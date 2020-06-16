<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'cod_veh', 'modelo_veh', 'ano_veh', 'marca_veh', 'patente_veh',
        'tipo_veh', 'rut_cli_veh', 'cod_taller_veh'
    ];

    //scope

    public function scopePatente($query, $patente_veh){

    	if($patente_veh)
    		return $query->where('patente_veh', $patente_veh);
    }
}
