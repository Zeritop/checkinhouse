<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{

	public function index(){
		return view('index');
	}

    public function admin(){
        return view('admin/index');
    }
}