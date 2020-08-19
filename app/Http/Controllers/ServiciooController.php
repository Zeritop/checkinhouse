<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Cliente;
use Illuminate\Support\Facades\DB;





class ServiciooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /*public function __construct(){

        $this->middleware('auth');
    }*/

    public function index(Request $request)
    {


        $servicios = DB::table('servicios')->orderBy('created_at', 'ASC')->get();



        return view('serviciosss.index', ['servicios' => $servicios])
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function index2(Request $request)
    {


        $servicios = DB::table('servicios')->orderBy('created_at', 'ASC')->get();



        return view('serviciosss.index2', ['servicios' => $servicios])
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        

        return redirect()->route('serviciosss.index')
                        ->with('success','Servicio Agendado exitosamente');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::find($id);
        return view('serviciosss.show',compact('servicio'));
    }

    public function edit($id)
    {
       //
    }

    public function update(Request $request, $id)
    {
       //
    }

    public function destroy($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cotizacion2(){
    return view('serviciosss/index2');
    }
}
