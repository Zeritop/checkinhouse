<?php

namespace App\Http\Controllers;

use App\Generador;
use Illuminate\Http\Request;

class GeneradorController extends Controller
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
         
        $generadors = Generador::orderBy('created_at', 'ASC')->paginate(5);
  
        return view('intranet.generadors.index',compact('generadors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.generadors.create');
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
     * @param  \App\Generador  $generador
     * @return \Illuminate\Http\Response
     */
    public function show(Generador $generador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generador  $generador
     * @return \Illuminate\Http\Response
     */
    public function edit(Generador $generador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generador  $generador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generador $generador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generador  $generador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generador $generador)
    {
        //
    }
}
