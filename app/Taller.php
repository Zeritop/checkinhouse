<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $fillable = [
        'id', 'cod_taller', 'dir_taller', 'cap_taller', 'tel_taller', 'nombre_taller'
    ];


}
