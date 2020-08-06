<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    protected $fillable = [
      'name', 'details', 'color', 'start', 'end', 'id_user'
    ];
}
