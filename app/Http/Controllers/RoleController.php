<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){

       $this->middleware('permission:roles.create')->only(['create', 'store']);
       $this->middleware('permission:roles.index')->only(['index']);
       $this->middleware('permission:roles.show')->only(['show']);
       $this->middleware('permission:roles.edit')->only(['edit', 'update']);
       $this->middleware('permission:roles.destroy')->only(['destroy']);
     }

    public function index()
    {
        $roles = Role::orderBy('created_at', 'ASC')->paginate(5);

        return view('intranet.roles.index', compact('roles'))
                ->with('i', (request()->input('page', 1) -1 ) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::orderBy('created_at', 'ASC')->get();

        return view('intranet.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->all());

        //$role->permissions()->sync($request->get('permissions'));
        $role->syncPermissions($request->get('permissions'));


        return redirect()->route('roles.index')
                  ->with('success', 'Role creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);

        return view('intranet.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);

        $permissions = Permission::orderBy('created_at', 'ASC')->get();

        return view('intranet.roles.edit', compact('role', 'permissions'));
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
        $role = Role::find($id);
        $role->name = $request->name;

        if(isset($_POST["permissions"])){
          $role->syncPermissions($request->get('permissions'));
        }

      /*  if(!isset($_POST['permissions'])){
          $role->hasPermissionTo($request->get('permissions'));
          $role->revokePermissionTo($request->get('permissions'));
        }*/

        $role->save();



        return redirect()->route('roles.index')
                  ->with('success', 'Role Actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Role::find($id)->delete();

     return redirect()->route('roles.index')
                     ->with('success','Role eliminado exitosamente');
    }
}
