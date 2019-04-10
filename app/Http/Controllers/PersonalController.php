<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;

class PersonalController extends Controller
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
        $rut = $request->get('rut_pers');
        $nombre = $request->get('nom_pers');
        $personales = Personal::orderBy('created_at', 'ASC')
        ->rut($rut)
        ->nombre($nombre)
        ->paginate(5);
  
        return view('intranet.personales.index',compact('personales'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.personales.create');
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
            'cod_pers' => 'required',
            'nom_pers' => 'required',
            'ape_pers' => 'required',
            'dir_pers' => 'required',
            'tel_pers' => 'required',
        ]);
  
        Personal::create($request->all());
   
        return redirect()->route('personales.index')
                        ->with('success','Personal creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);
        return view('intranet.personales.show',compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::find($id);
        return view('intranet.personales.edit',compact('personal'));
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
            'cod_pers' => 'required',
            'nom_pers' => 'required',
            'ape_pers' => 'required',
            'dir_pers' => 'required',
            'tel_pers' => 'required',
        ]);
  
         Personal::find($id)->update($request->all());
  
        return redirect()->route('personales.index')
                        ->with('success','Personal actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Personal::find($id)->delete();
  
        return redirect()->route('personales.index')
                        ->with('success','Personal eliminado exitosamente');
    }
}
