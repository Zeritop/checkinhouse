<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use Illuminate\Support\Facades\DB;

class DiagnosticoController extends Controller
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
        /*$id = $request->get('id');
        $nombre = $request->get('nombre');
        $servicios = Servicio::orderBy('created_at', 'ASC')
        ->id($id)
        ->nombre($nombre)
        ->paginate(5);
  
        return view('intranet.servicioss.index',compact('servicios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);*/
            
        $servicios = DB::table('servicios')->where('nombre', 'Diagnostico General')->orderBy('created_at', 'ASC')->get();

        return view('intranet.servicioss.diagnosticogeneral.index', ['servicios' => $servicios])
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.servicioss.diagnosticogeneral.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            
        ]);
  
        Servicio::create($request->all());
   
        return redirect()->route('diagnosticogeneral.index')
                        ->with('success','Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::find($id);
        return view('intranet.servicioss.diagnosticogeneral.show',compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('intranet.servicioss.diagnosticogeneral.edit',compact('servicio'));
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
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            
        ]);
  
         Servicio::find($id)->update($request->all());
  
        return redirect()->route('diagnosticogeneral.index')
                        ->with('success','Servicio actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicio::find($id)->delete();
  
        return redirect()->route('diagnosticogeneral.index')
                        ->with('success','Servicio eliminado exitosamente');
    }
}