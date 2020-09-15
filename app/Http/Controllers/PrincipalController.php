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
		public function verificar(){
        return view('verificarCuenta');

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
    public function calendario(){
    return view('calendario');
    }
     public function calendario2(){
    return view('calendario2');
    }
        public function confirmar(){
    return view('confirmar');
    }

    }
