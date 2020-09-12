<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\Taller;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){

       $this->middleware('permission:vehiculos.create')->only(['create', 'store']);
       $this->middleware('permission:vehiculos.index')->only(['index']);
       $this->middleware('permission:vehiculos.show')->only(['show']);
       $this->middleware('permission:vehiculos.edit')->only(['edit', 'update']);
       $this->middleware('permission:vehiculos.destroy')->only(['destroy']);
    }

    public function index(Request $request)
    {
      $patente = $request->get('patente_veh');
      $vehiculos = Vehiculo::orderBy('created_at', 'ASC')
      ->patente($patente)
      ->paginate(5);

      $vehiculoss = DB::table('vehiculos')->join('tallers', 'cod_taller', '=', 'cod_taller_veh')
                                         ->select('nombre_taller')
                                         ->get();


      return view('intranet.vehiculos.index',compact('vehiculos', 'vehiculoss'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $veh_taller = DB::table('tallers')->select('nombre_taller', 'cod_taller')->get();
        return view('intranet.vehiculos.create', compact('veh_taller'));
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
          'cod_veh' => 'required',
          'modelo_veh' => 'required',
          'ano_veh' => 'required',
          'marca_veh' => 'required',
          'patente_veh' => 'required',
          'tipo_veh' => 'required',
          'rut_cli_veh' => 'required',
          'cod_taller_veh' => 'required',

      ]);

      Vehiculo::create($request->all());

      return redirect()->route('vehiculos.index')
                      ->with('success','Vehiculo creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $vehiculo = Vehiculo::find($id);
      $vehiculoss = DB::table('vehiculos')->join('tallers', 'cod_taller', '=', 'cod_taller_veh')
                                         ->select('nombre_taller')
                                         ->get();

      return view('intranet.vehiculos.show',compact('vehiculo', 'vehiculoss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $vehiculo = Vehiculo::find($id);
      $veh_taller = DB::table('tallers')->select('nombre_taller', 'cod_taller')->get();
      $vehiculoss = DB::table('vehiculos')->join('tallers', 'cod_taller', '=', 'cod_taller_veh')
                                         ->select('nombre_taller')
                                         ->get();

      return view('intranet.vehiculos.edit',compact('vehiculo', 'veh_taller', 'vehiculoss'));
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
      request()->validate([
          'cod_veh' => 'required',
          'modelo_veh' => 'required',
          'ano_veh' => 'required',
          'marca_veh' => 'required',
          'patente_veh' => 'required',
          'tipo_veh' => 'required',
          'rut_cli_veh' => 'required',
          'cod_taller_veh' => 'required',

      ]);

      Vehiculo::find($id)->update($request->all());

      return redirect()->route('vehiculos.index')
                      ->with('success','Vehiculo actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Vehiculo::find($id)->delete();

     return redirect()->route('vehiculos.index')
                     ->with('success','Vehiculo eliminado exitosamente');
    }
}
