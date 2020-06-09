<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
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
        $rut_cli = $request->get('rut_cli');
        $nombre = $request->get('nom_cli');
        $clientes = Cliente::orderBy('created_at', 'ASC')
        ->rut($rut_cli)
        ->nombre($nombre)
        ->paginate(5);
        return view('intranet.clientes.index',compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.clientes.create');
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
            'rut_cli' => 'required',
            'nom_cli' => 'required',
            'ape_cli' => 'required',
            'tel_cli' => 'required',
            'mail_cli' => 'required',
            'cod_dom_cli' => 'required',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')
                        ->with('success','Cliente creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('intranet.clientes.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('intranet.clientes.edit',compact('cliente'));
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
            'rut_cli' => 'required',
            'nom_cli' => 'required',
            'ape_cli' => 'required',
            'tel_cli' => 'required',
            'mail_cli' => 'required',
            'cod_dom_cli' => 'required',
        ]);

        Cliente::find($id)->update($request->all());

        return redirect()->route('clientes.index')
                        ->with('success','Cliente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Cliente::find($id)->delete();

        return redirect()->route('clientes.index')
                        ->with('success','Cliente eliminado exitosamente');
    }
}
