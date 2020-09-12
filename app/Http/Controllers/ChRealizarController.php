<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\ChRealizar;
use App\ChGenerador;
use App\ChHistorial;
use Illuminate\Support\Facades\DB;

class ChRealizarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){

       $this->middleware('permission:chRealizars.create')->only(['create', 'store']);
       $this->middleware('permission:chRealizars.index')->only(['index']);
       $this->middleware('permission:chRealizars.show')->only(['show']);
       $this->middleware('permission:chRealizars.edit')->only(['edit', 'update']);
       $this->middleware('permission:chRealizars.destroy')->only(['destroy']);
    }

    public function index(Request $request)
    {
      $id_generador = $request->buscar_sel;
      $id_gnr = DB::table('ch_generadors')->select('*')
                                          ->where('id', '=', $id_generador)
                                          ->get();


      $ch_rg = DB::table('ch_generadors')->select('titulo_gen', 'id')->get();

      $ext11 = DB::table('ch_generadors')->select('tarea11')->where('id', $id_generador)->first();
      $ext12 = DB::table('ch_generadors')->select('tarea12')->where('id', $id_generador)->first();
      $ext13 = DB::table('ch_generadors')->select('tarea13')->where('id', $id_generador)->first();
      $ext14 = DB::table('ch_generadors')->select('tarea14')->where('id', $id_generador)->first();
      $ext15 = DB::table('ch_generadors')->select('tarea15')->where('id', $id_generador)->first();
      $ext16 = DB::table('ch_generadors')->select('tarea16')->where('id', $id_generador)->first();
      $ext17 = DB::table('ch_generadors')->select('tarea17')->where('id', $id_generador)->first();
      $ext18 = DB::table('ch_generadors')->select('tarea18')->where('id', $id_generador)->first();
      $ext19 = DB::table('ch_generadors')->select('tarea19')->where('id', $id_generador)->first();
      $ext20 = DB::table('ch_generadors')->select('tarea20')->where('id', $id_generador)->first();


      $ch_realizars = ChRealizar::orderBy('created_at', 'ASC')
      ->paginate(5);

      return view('intranet.chRealizars.index',compact('ch_realizars', 'ch_rg', 'id_gnr', 'id_generador',
     'ext11', 'ext12', 'ext13', 'ext14', 'ext15', 'ext16', 'ext17', 'ext18', 'ext19', 'ext20'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      request()->validate([
          'patente_real' => 'required',
          'rut_real' => 'required',
          'titulo_gen_real' => 'required',

      ]);

      $ch_realizars = new ChRealizar;
        if(isset($_POST["chbx1"])){
        //El usuario marco el checkbox
      $ch_realizars->chbx1 = true;
      }else {
        //el usuario no marco el checkbox
      $ch_realizars->chbx1 = false;
      }

      if(isset($_POST["chbx2"])){
      //El usuario marco el checkbox
    $ch_realizars->chbx2 = true;
    }else {
      //el usuario no marco el checkbox
    $ch_realizars->chbx2 = false;
    }
    if(isset($_POST["chbx3"])){
    //El usuario marco el checkbox
  $ch_realizars->chbx3 = true;
  }else {
    //el usuario no marco el checkbox
  $ch_realizars->chbx3 = false;
  }

  if(isset($_POST["chbx4"])){
  //El usuario marco el checkbox
$ch_realizars->chbx4 = true;
}else {
  //el usuario no marco el checkbox
$ch_realizars->chbx4 = false;
}
if(isset($_POST["chbx5"])){
//El usuario marco el checkbox
$ch_realizars->chbx5 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx5 = false;
}

if(isset($_POST["chbx6"])){
//El usuario marco el checkbox
$ch_realizars->chbx6 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx6 = false;
}
if(isset($_POST["chbx7"])){
//El usuario marco el checkbox
$ch_realizars->chbx7 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx7 = false;
}

if(isset($_POST["chbx8"])){
//El usuario marco el checkbox
$ch_realizars->chbx8 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx8 = false;
}
if(isset($_POST["chbx9"])){
//El usuario marco el checkbox
$ch_realizars->chbx9 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx9 = false;
}

if(isset($_POST["chbx10"])){
//El usuario marco el checkbox
$ch_realizars->chbx10 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx10 = false;
}
if(isset($_POST["chbx11"])){
//El usuario marco el checkbox
$ch_realizars->chbx11 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx11 = false;
}

if(isset($_POST["chbx12"])){
//El usuario marco el checkbox
$ch_realizars->chbx12 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx12 = false;
}
if(isset($_POST["chbx13"])){
//El usuario marco el checkbox
$ch_realizars->chbx13 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx13 = false;
}

if(isset($_POST["chbx14"])){
//El usuario marco el checkbox
$ch_realizars->chbx14 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx14 = false;
}
if(isset($_POST["chbx15"])){
//El usuario marco el checkbox
$ch_realizars->chbx15 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx15 = false;
}

if(isset($_POST["chbx16"])){
//El usuario marco el checkbox
$ch_realizars->chbx16 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx16 = false;
}
if(isset($_POST["chbx17"])){
//El usuario marco el checkbox
$ch_realizars->chbx17 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx17 = false;
}

if(isset($_POST["chbx18"])){
//El usuario marco el checkbox
$ch_realizars->chbx18 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx18 = false;
}
if(isset($_POST["chbx19"])){
//El usuario marco el checkbox
$ch_realizars->chbx19 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx19 = false;
}

if(isset($_POST["chbx20"])){
//El usuario marco el checkbox
$ch_realizars->chbx20 = true;
}else {
//el usuario no marco el checkbox
$ch_realizars->chbx20 = false;
}
    $ch_realizars->patente_real = $request->patente_real;
    $ch_realizars->comentario_real = $request->comentario_real;
    $ch_realizars->rut_real = $request->rut_real;
    $ch_realizars->titulo_gen_real = $request->titulo_gen_real;
    $ch_realizars->save();


    $ch_historials = new ChHistorial;
    $ch_historials->patente_real_his = $request->patente_real;
    $ch_historials->rut_real_his = $request->rut_real;
    $ch_historials->nombre_gen_his = $request->titulo_gen_real;
    $ch_historials->save();

      return redirect()->route('chRealizars.index')
                      ->with('success','Tarea realizada exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
