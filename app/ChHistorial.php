<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChHistorial extends Model
{
    protected $fillable = [
        'patente_real_his', 'nombre_gen_his', 'rut_real_his'
    ];
}
