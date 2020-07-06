<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenedor;
use App\Taller;
use Illuminate\Support\Facades\DB;

class ContenedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){

        $this->middleware('auth');
     }

    public function index()
    {
      $cont_taller = DB::table('contenedors')->join('tallers','cod_taller', 'nombre_taller_contenedor' )
                                            ->select('cod_contenedor', 'tallers.nombre_taller',
                                              'nombre_contenedor', 'contenedors.id')
                                              ->orderBy('contenedors.id')
                                              ->paginate(5);

      $contenedores = Contenedor::orderBy('created_at', 'ASC')
      ->paginate(5);

      $contenedores1 = Contenedor::orderBy('created_at', 'ASC')->get();

      $unionself = DB::table('contenedors AS c1')->join('contenedors AS c2', 'c1.id', '=', 'c2.cid')
                                                 ->select('c2.nombre_contenedor', 'c1.id')
                                                 ->get();
      //dd($unionself);
      return view('intranet.contenedors.index',compact('contenedores', 'cont_taller', 'contenedores1',
      'unionself'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $contenedorr = DB::table('tallers')->select('nombre_taller', 'cod_taller')->get();
      $conte1 = DB::table('contenedors')->select('id', 'nombre_contenedor')->get();
      //dd($conte);
        return view('intranet.contenedors.create', compact('contenedorr', 'conte1'));
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
          'cod_contenedor' => 'required',
          'nombre_contenedor' => 'required',
          'capacidad_contenedor' => 'required',
          'nombre_taller_contenedor' => 'required',

      ]);

      Contenedor::create($request->all());

      return redirect()->route('contenedors.index')
                      ->with('success','Contenedor creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cont_taller = DB::table('contenedors')->join('tallers','cod_taller', 'nombre_taller_contenedor' )
                                            ->select( 'tallers.nombre_taller')
                                            ->where('contenedors.id', $id)
                                            ->first();

      $unionself = DB::table('contenedors AS c1')->join('contenedors AS c2', 'c1.id', '=', 'c2.cid')
                                                 ->select('c1.nombre_contenedor')
                                                 ->first();

      $contenedor = Contenedor::find($id);
      //dd($contenedor);
      return view('intranet.contenedors.show',compact('contenedor', 'cont_taller', 'unionself'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cont_taller = DB::table('contenedors')->join('tallers','cod_taller', '=', 'nombre_taller_contenedor' )
                                              ->select('cod_taller')
                                              ->where('contenedors.id', $id)
                                              ->first();

      $contenedorr = DB::table('tallers')->select('nombre_taller', 'cod_taller')->get();
      $conte_cont = DB::table('contenedors')->select('cid')->where('id', $id)->first();
      $conte1 = DB::table('contenedors')->select('id', 'nombre_contenedor')->get();
      $contenedor = Contenedor::find($id);
      return view('intranet.contenedors.edit',compact('contenedor', 'contenedorr', 'cont_taller',
       'conte_cont', 'conte1'));
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
          'cod_contenedor' => 'required',
          'nombre_contenedor' => 'required',
          'capacidad_contenedor' => 'required',
          'nombre_taller_contenedor' => 'required',

      ]);
     Contenedor::find($id)->update($request->all());

     return redirect()->route('contenedors.index')
                     ->with('success','Contenedor actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Contenedor::find($id)->delete();

     return redirect()->route('contenedors.index')
                     ->with('success','Contenedor eliminado exitosamente');
    }
}
