<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herramienta;

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
        $herramientas = Herramienta::orderBy('created_at', 'ASC')
        ->cod($cod_her)
        ->nombre($nombre)
        ->paginate(5);
        
        return view('intranet.herramientas.index',compact('herramientas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.herramientas.create');
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
            'vida_her' => 'required',
            'marca_her' => 'required',
            'cod_taller' => 'required',
            
        ]);
     
        Herramienta::create($request->all());

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
        $herramienta = Herramienta::find($id);
        return view('intranet.herramientas.show',compact('herramienta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $herramienta = Herramienta::find($id);
        return view('intranet.herramientas.edit',compact('herramienta'));
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
            'marca_her' => 'required',
            'cod_taller' => 'required',
            
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
