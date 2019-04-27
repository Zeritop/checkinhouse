<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatServ;
use Illuminate\Support\Facades\Storage;

class CatServController extends Controller
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
        $categorias = CatServ::orderBy('created_at', 'ASC')
        ->paginate(5);
  
        return view('intranet.catServs.index',compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.catServs.create');
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
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto' => 'required',
        ]);
        $categoria = new CatServ;
        $categoriatmp = new CatServ;
        $categoria->foto = Storage::putFile('public', $request->file('foto'));
        $categoria->foto = basename(Storage::putFile('public', $request->file('foto')));   
        $categoria->nombre = $request->nombre;
        $categoria->titulo = $request->titulo;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();    
       
    
        
        return redirect()->route('catServs.index')
                        ->with('success','Categoria Servicio creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = CatServ::find($id);
        return view('intranet.catServs.show',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = CatServ::find($id);
        return view('intranet.catServs.edit',compact('categoria'));
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
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);
  
         CatServ::find($id)->update($request->all());
  
        return redirect()->route('catServs.index')
                        ->with('success','Categoria Servicio actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CatServ::find($id)->delete();
  
        return redirect()->route('catServs.index')
                        ->with('success','Categoria Servicio eliminada exitosamente');
    }
}
