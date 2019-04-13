<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;


class UsuarioController extends Controller
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
        $rut_usu = $request->get('rut_usu');
        $nombre = $request->get('nom_usu');
        $usuarios = Usuario::orderBy('created_at', 'ASC')
        ->rut($rut_usu)
        ->nombre($nombre)
        ->paginate(5);
        return view('intranet.usuarios.index',compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.usuarios.create');
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
            'rut_usu' => 'required',
            'nom_usu' => 'required',
            'ape_usu' => 'required',
            'tel_usu' => 'required',
            'mail_usu' => 'required',
            'clave' => 'required',
        ]);
        $usuario = $request->get('clave');
        $clave = bcrypt($usuario);
        //dd($usuario);
        //dd($clave);
        Usuario::create([
        'rut_usu' => $request->rut_usu,
        'nom_usu' => $request->nom_usu,
        'ape_usu' => $request->ape_usu,
        'tel_usu' => $request->tel_usu,
        'mail_usu' => $request->mail_usu,
        'clave' => $clave,
    ]);
        
        
        //$usuario->clave = bcrypt($request->clave);
        //Usuario::create($request->all());

        return redirect()->route('usuarios.index')
                        ->with('success','Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('intranet.usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('intranet.usuarios.edit',compact('usuario'));
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
            'rut_usu' => 'required',
            'nom_usu' => 'required',
            'ape_usu' => 'required',
            'tel_usu' => 'required',
            'mail_usu' => 'required',
            'clave' => 'required',
        ]);
        
        $usuario = $request->get('clave');
        $clave = bcrypt($usuario);
     
        Usuario::find($id)->update([
        'rut_usu' => $request->rut_usu,
        'nom_usu' => $request->nom_usu,
        'ape_usu' => $request->ape_usu,
        'tel_usu' => $request->tel_usu,
        'mail_usu' => $request->mail_usu,
        'clave' => $clave,
    ]);

        //Usuario::find($id)->update($request->all());

        return redirect()->route('usuarios.index')
                        ->with('success','Usuario actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Usuario::find($id)->delete();

        return redirect()->route('usuarios.index')
                        ->with('success','Usuario eliminado exitosamente');
    }
}
