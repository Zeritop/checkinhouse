<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChHistorial;
use App\ChRealizar;
use Illuminate\Support\Facades\DB;

class ChHistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){

       $this->middleware('permission:chHistorials.create')->only(['create', 'store']);
       $this->middleware('permission:chHistorials.index')->only(['index']);
       $this->middleware('permission:chHistorials.show')->only(['show']);
       $this->middleware('permission:chHistorials.edit')->only(['edit', 'update']);
       $this->middleware('permission:chHistorials.destroy')->only(['destroy']);
   }
    

    public function index()
    {
      $ch_historials = ChHistorial::orderBy('created_at', 'ASC')
      ->paginate(5);

      return view('intranet.chHistorials.index',compact('ch_historials'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ch_historial = ChHistorial::find($id);

        $ch_histo = DB::table('ch_historials')->join('ch_realizars', 'ch_realizars.id', '=', 'ch_historials.id')
                                              ->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
                                              ->select('*')
                                              ->where('ch_historials.id', $id)
                                              ->get();

        return view('intranet.chHistorials.show',compact('ch_historial', 'ch_histo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $ch_historial = ChHistorial::find($id);

      $id_gnr = DB::table('ch_historials')->join('ch_realizars', 'ch_realizars.id', '=', 'ch_historials.id')
                                          ->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
                                          ->select('*')
                                          ->where('ch_historials.id', $id)
                                          ->get();

      $ext11 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea11')->where('ch_historials.id', $id)->first();
      $ext12 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea12')->where('ch_historials.id', $id)->first();
      $ext13 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea13')->where('ch_historials.id', $id)->first();
      $ext14 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea14')->where('ch_historials.id', $id)->first();
      $ext15 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea15')->where('ch_historials.id', $id)->first();
      $ext16 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea16')->where('ch_historials.id', $id)->first();
      $ext17 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea17')->where('ch_historials.id', $id)->first();
      $ext18 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea18')->where('ch_historials.id', $id)->first();
      $ext19 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea19')->where('ch_historials.id', $id)->first();
      $ext20 = DB::table('ch_historials')->join('ch_generadors', 'ch_generadors.titulo_gen', '=', 'ch_historials.nombre_gen_his')
      ->select('tarea20')->where('ch_historials.id', $id)->first();


      return view('intranet.chHistorials.edit',compact('ch_historial', 'id_gnr', 'ext11', 'ext12', 'ext13',
    'ext14', 'ext15', 'ext16', 'ext17', 'ext18', 'ext19', 'ext20'));
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
      $ch_realizars = ChRealizar::find($id);

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

    return redirect()->route('chHistorials.index')
                    ->with('success','tarea actualizada exitosamente');

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
