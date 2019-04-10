<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    protected $fillable = [
        'name', 'email', 'password', 'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
   
    //query Scope

    public function scopeNombre($query, $name){

    	if($name)
    		return $query->where('name', $name);
    }

    public function scopeEmail($query, $email){

    	if($email)
    		return $query->where('email', $email);
    }

    
}
