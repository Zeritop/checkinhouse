<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repuesto;

class RepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

      $this->middleware('permission:repuestos.create')->only(['create', 'store']);
      $this->middleware('permission:repuestos.index')->only(['index']);
      $this->middleware('permission:repuestos.show')->only(['show']);
      $this->middleware('permission:repuestos.edit')->only(['edit', 'update']);
      $this->middleware('permission:repuestos.destroy')->only(['destroy']);
    }

    public function index(Request $request)
    {
        $nombre = $request->get('nombre');
        $codigo = $request->get('codigo');
        $repuestos = Repuesto::orderBy('created_at', 'ASC')
        ->nombre($nombre)
        ->codigo($codigo)
        ->paginate(5);
        return view('intranet.repuestos.index',compact('repuestos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.repuestos.create');
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
            'nombre' => 'required',
            'cantidad' => 'required',
            'descripcion' => 'required',
            'medidas' => 'required',
            'codigo' => 'required',
        ]);

        Repuesto::create($request->all());

        return redirect()->route('repuestos.index')
                        ->with('success','Repuesto creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repuesto = Repuesto::find($id);
        return view('intranet.repuestos.show',compact('repuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repuesto = Repuesto::find($id);
        return view('intranet.repuestos.edit',compact('repuesto'));
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
            'nombre' => 'required',
            'cantidad' => 'required',
            'descripcion' => 'required',
            'medidas' => 'required',
            'codigo' => 'required',
        ]);

        Repuesto::find($id)->update($request->all());

        return redirect()->route('repuestos.index')
                        ->with('success','Repuesto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Repuesto::find($id)->delete();

        return redirect()->route('repuestos.index')
                        ->with('success','Repuesto eliminado exitosamente');
    }
}
