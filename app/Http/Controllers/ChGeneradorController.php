<?php

namespace App\Http\Controllers;

use App\ChGenerador;
use Illuminate\Http\Request;

class ChGeneradorController extends Controller
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

      $ch_generadors = ChGenerador::orderBy('created_at', 'ASC')
      ->paginate(5);

      return view('intranet.chGeneradors.index',compact('ch_generadors'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.chGeneradors.create');
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
          'titulo_gen' => 'required',
          'tarea1' => 'required',
          'tarea2' => 'required',
          'tarea3' => 'required',
          'tarea4' => 'required',
          'tarea5' => 'required',
          'tarea6' => 'required',
          'tarea7' => 'required',
          'tarea8' => 'required',
          'tarea9' => 'required',
          'tarea10' => 'required',

      ]);

      ChGenerador::create($request->all());

      return redirect()->route('chGeneradors.index')
                      ->with('success','Tarea creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ch_Generador  $ch_Generador
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ch_generador = ChGenerador::find($id);
      return view('intranet.chGeneradors.show',compact('ch_generador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ch_Generador  $ch_Generador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $ch_generador = ChGenerador::find($id);
      return view('intranet.chGeneradors.edit',compact('ch_generador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ch_Generador  $ch_Generador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      request()->validate([
          'titulo_gen' => 'required',
          'tarea1' => 'required',
          'tarea2' => 'required',
          'tarea3' => 'required',
          'tarea4' => 'required',
          'tarea5' => 'required',
          'tarea6' => 'required',
          'tarea7' => 'required',
          'tarea8' => 'required',
          'tarea9' => 'required',
          'tarea10' => 'required',

      ]);
     ChGenerador::find($id)->update($request->all());

     return redirect()->route('chGeneradors.index')
                     ->with('success','Tarea actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ch_Generador  $ch_Generador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      ChGenerador::find($id)->delete();

     return redirect()->route('chGeneradors.index')
                     ->with('success','Tarea eliminada exitosamente');
    }
}