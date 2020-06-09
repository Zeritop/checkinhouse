<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $fillable = [
        'cod_her', 'nom_her', 'vida_her', 'marca_her', 'cod_taller_her', 'alias_her', 'prioridad_her', 'foto_her',
        'cod_contenedor_her'
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

    public function scopeAlias($query, $alias){

    	if($alias)
    		return $query->where('alias_her', $alias);
    }
}
