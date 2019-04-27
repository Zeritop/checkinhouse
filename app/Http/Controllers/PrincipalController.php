<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PrincipalController extends Controller
{
    

	public function index(){
		return view('index');
	}

	public function servicios(){
		return view('servicios');
	}

	public function nosotros(){
		return view('nosotros');
	}

    public function admin(){
        return view('admin/index');
    }
    
    public function cotizar(){
    	return view('cotizar');
    }
    
    public function programarservicios(){
        return view('programarservicios');
    }
    
    public function correo(){
        return view('correo');
    }
    
    
    /*public function intranet(){
        return view('intranet/index');
    }*/
    public function ingresar(){
        return view('auth/login');
    }
    public function cuenta(){
        return view('intranet/cuenta');
    }
    public function cotizacion(){
        return view('pdf');
    }
    public function crear(){
    return view('crear');
    }
    public function horarios(){
    return view('horarios');
    }
    

       }
