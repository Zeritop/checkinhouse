<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herramienta;
use App\Taller;
use App\Contenedor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){

        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $cod_her = $request->get('cod_her');
        $nombre = $request->get('nom_her');
        $alias = $request->get('alias_her');

        $herr_cont = DB::table('herramientas')->join('contenedors', 'cod_contenedor', '=', 'cod_contenedor_her')
                                              ->select('nombre_contenedor')
                                              ->get();
        $herr_tall = DB::table('herramientas')->join('tallers', 'cod_taller', '=', 'cod_contenedor_her')
                                              ->select('nombre_taller')
                                              ->get();

        $herramientas = Herramienta::orderBy('created_at', 'ASC')
        ->cod($cod_her)
        ->nombre($nombre)
        ->alias($alias)
        ->paginate(5);

        return view('intranet.herramientas.index',compact('herramientas', 'herr_cont', 'herr_tall'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $herramientaa = DB::table('tallers')->select('nombre_taller', 'cod_taller')->get();
      $herra_contenedor = DB::table('contenedors')->select('nombre_contenedor', 'cod_contenedor')->get();

        return view('intranet.herramientas.create', compact('herramientaa', 'herra_contenedor'));
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
            'cod_her' => 'required',
            'nom_her' => 'required',
            'alias_her' => 'required',
            'vida_her' => 'required',
            'prioridad_her' => 'required',
            'foto_her' => 'required',
            'marca_her' => 'required',
            'cod_taller_her' => 'required',
            'cod_contenedor_her' => 'required',

        ]);


        //Herramienta::create($request->all());
        $herramienta = new Herramienta;
        $herramientatmp = new Herramienta;
        $herramienta->cod_her = $request->cod_her;
        $herramienta->nom_her = $request->nom_her;
        $herramienta->alias_her = $request->alias_her;
        $herramienta->prioridad_her = $request->prioridad_her;
        $herramienta->foto_her = Storage::putFile('public', $request->file('foto_her'));
        $herramienta->foto_her = basename(Storage::putFile('public', $request->file('foto_her')));
        $herramienta->marca_her = $request->marca_her;
        $herramienta->vida_her = $request->vida_her;
        $herramienta->cod_taller_her = $request->cod_taller_her;
        $herramienta->cod_contenedor_her = $request->cod_contenedor_her;
        $herramienta->save();

        return redirect()->route('herramientas.index')
                        ->with('success','Herramienta creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $herr_cont = DB::table('herramientas')->join('contenedors', 'cod_contenedor', '=', 'cod_contenedor_her')
                                            ->select('nombre_contenedor')
                                            ->get();
      $herr_tall = DB::table('herramientas')->join('tallers', 'cod_taller', '=', 'cod_contenedor_her')
                                            ->select('nombre_taller')
                                            ->get();

        $herramienta = Herramienta::find($id);
        return view('intranet.herramientas.show',compact('herramienta', 'herr_tall', 'herr_cont'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $herr_cont = DB::table('herramientas')->join('contenedors', 'cod_contenedor', '=', 'cod_contenedor_her')
                                            ->select('nombre_contenedor')
                                            ->get();
      $herr_tall = DB::table('herramientas')->join('tallers', 'cod_taller', '=', 'cod_contenedor_her')
                                            ->select('nombre_taller')
                                            ->get();
       $herramientaa = DB::table('tallers')->select('nombre_taller', 'cod_taller')->get();
       $herra_contenedor = DB::table('contenedors')->select('nombre_contenedor', 'cod_contenedor')->get();
        $herramienta = Herramienta::find($id);
        return view('intranet.herramientas.edit',compact('herramienta', 'herramientaa', 'herra_contenedor',
            'herr_cont', 'herr_tall'));
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
            'cod_her' => 'required',
            'nom_her' => 'required',
            'vida_her' => 'required',
            'alias_her' => 'required',
            'prioridad_her' => 'required',
            'marca_her' => 'required',
            'cod_taller_her' => 'required',
            'cod_contenedor_her' => 'required',

        ]);
        Herramienta::find($id)->update($request->all());

        return redirect()->route('herramientas.index')
                        ->with('success','herramienta actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Herramienta::find($id)->delete();

        return redirect()->route('herramientas.index')
                        ->with('success','herramienta eliminada exitosamente');
    }
}
