<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendario;

class CalendarioController extends Controller
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

      if($request->ajax()){
        return Calendario::orderBy('created_at', 'ASC')->get();
      }else{
        return view('intranet.calendarios.index');
      }
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

        $calendario = new Calendario;
        $calendario->name = $request->name;
        $calendario->details = $request->details;
        $calendario->start = $request->start;
        $calendario->end = $request->end;
        $calendario->color = $request->color;
        $calendario->id_user = auth()->id();
        $calendario->save();


        return $calendario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $calendario = Calendario::find($id);
        $calendario->name = $request->name;
        $calendario->details = $request->details;
        $calendario->save();

        return $calendario;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calendario = Calendario::find($id);
        $calendario->delete();
    }
}
