<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domicilio;

class DomicilioController extends Controller
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
        $cod = $request->get('cod_dom');
        $direccion = $request->get('dir_dom');
        $domicilios = Domicilio::orderBy('created_at', 'ASC')
        ->cod($cod)
        ->direccion($direccion)
        ->paginate(5);
  
        return view('intranet.domicilios.index',compact('domicilios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.domicilios.create');
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
            'cod_dom' => 'required',
            'dir_dom' => 'required',
        ]);
  
        Domicilio::create($request->all());
   
        return redirect()->route('domicilios.index')
                        ->with('success','Domicilio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $domicilio = Domicilio::find($id);
        return view('intranet.domicilios.show',compact('domicilio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domicilio = Domicilio::find($id);
        return view('intranet.domicilios.edit',compact('domicilio'));
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
            'cod_dom' => 'required',
            'dir_dom' => 'required',
        ]);
  
         Domicilio::find($id)->update($request->all());
  
        return redirect()->route('domicilios.index')
                        ->with('success','Domiclio actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Domicilio::find($id)->delete();
  
        return redirect()->route('domicilios.index')
                        ->with('success','Domicilio eliminado exitosamente');
    }
}
