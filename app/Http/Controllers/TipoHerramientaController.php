<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoHerramienta;

class TipoHerramientaController extends Controller
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
      $tipoH = TipoHerramienta::orderBy('created_at', 'ASC')
      ->paginate(10);

      return view('intranet.tipoHerramientas.index',compact('tipoH'))
          ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.tipoHerramientas.create');
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
          'nombre_th' => 'required',

      ]);

      TipoHerramienta::create($request->all());


      return redirect()->route('tipoHerramientas.index')
                      ->with('success','Tipo de Herramienta creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $tipoH = TipoHerramienta::find($id);
      return view('intranet.tipoHerramientas.show',compact('tipoH'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tipoH = TipoHerramienta::find($id);
      return view('intranet.tipoHerramientas.edit',compact('tipoH'));
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
        TipoHerramienta::find($id)->update($request->all());

        return redirect()->route('tipoHerramientas.index')
                        ->with('success','Tipo de herramienta actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      TipoHerramienta::find($id)->delete();

     return redirect()->route('tipoHerramientas.index')
                     ->with('success','Tipo de herramienta eliminada exitosamente');
    }
}
