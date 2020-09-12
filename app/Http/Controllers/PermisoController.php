<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){

        $this->middleware('permission:permisos.create')->only(['create', 'store']);
        $this->middleware('permission:permisos.index')->only(['index']);
        $this->middleware('permission:permisos.show')->only(['show']);
        $this->middleware('permission:permisos.edit')->only(['edit', 'update']);
        $this->middleware('permission:permisos.destroy')->only(['destroy']);
    }

    public function index()
    {
        $permisos = Permission::orderby('created_at', 'ASC')->paginate(5);

        return view('intranet.permisos.index', compact('permisos'))
                ->with('i', (request()->input('page', 1) -1 ) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $permi = $request->get('name');
          //dd($permi);
          //$permi = $request->name;
          $per = explode(" ", $permi);



          for($i=0; $i < sizeof($per); $i++){
              $pp = new Permission;
              $pp->name = $per[$i];
              $pp->save();


          }
          //$permiso = Permission::create($request->all());



          return redirect()->route('permisos.index')
                    ->with('success', 'Permiso creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $permiso = Permission::find($id);

      return view('intranet.permisos.show', compact('permiso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $permiso = Permission::find($id);

      return view('intranet.permisos.edit', compact('permiso'));
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
      $permiso = Permission::find($id);
      $permiso->name = $request->name;
      $permiso->save();

      return redirect()->route('permisos.index')
                ->with('success', 'Permiso Actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Permission::find($id)->delete();

     return redirect()->route('permisos.index')
                     ->with('success','Permiso eliminado exitosamente');
    }
}
