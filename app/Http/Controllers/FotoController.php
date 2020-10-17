<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

      $this->middleware('permission:fotos.create')->only(['create', 'store']);
      $this->middleware('permission:fotos.index')->only(['index']);
      $this->middleware('permission:fotos.show')->only(['show']);
      $this->middleware('permission:fotos.edit')->only(['edit', 'update']);
      $this->middleware('permission:fotos.destroy')->only(['destroy']);
    }

    public function index()
    {
        $fotos = Foto::orderBy('created_at', 'ASC')
        ->paginate(5);

        return view('intranet.fotos.index',compact('fotos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.fotos.create');
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
            'name' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'descripcion' => 'required',
        ]);
        $foto = new Foto;
        $foto->nombre = Storage::putFile('public', $request->file('nombre'));
        $foto->nombre = basename(Storage::putFile('public', $request->file('nombre')));
        $foto->name = $request->name;
        $foto->precio = $request->precio;
        $foto->cantidad = $request->cantidad;
        $foto->descripcion = $request->descripcion;
        $foto->save();



        return redirect()->route('fotos.index')
                        ->with('success','Producto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foto = Foto::find($id);
        return view('intranet.fotos.show',compact('foto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foto = Foto::find($id);
        return view('intranet.fotos.edit',compact('foto'));
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
            'name' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'descripcion' => 'required',
        ]);

         Foto::find($id)->update($request->all());

        return redirect()->route('fotos.index')
                        ->with('success','Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Foto::find($id)->delete();

        return redirect()->route('fotos.index')
                        ->with('success','Producto eliminado exitosamente');
    }
}
