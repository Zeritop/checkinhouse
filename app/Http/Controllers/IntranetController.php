<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;


class IntranetController extends Controller
{

	public function __construct(){

	     $this->middleware('permission:intranet.index')->only(['index']);

    }

    public function intranet(Request $request){


        //Auth::user()->authorizeRoles('admin');
        //dd(Auth::user()->roles);


    	return view('intranet/index');
    }




}
