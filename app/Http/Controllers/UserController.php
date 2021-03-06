<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){

       $this->middleware('permission:uusers.create')->only(['create', 'store']);
       $this->middleware('permission:uusers.index')->only(['index']);
       $this->middleware('permission:uusers.show')->only(['show']);
       $this->middleware('permission:uusers.edit')->only(['edit', 'update']);
       $this->middleware('permission:uusers.destroy')->only(['destroy']);
    }

    public function index(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $users = User::orderBy('created_at', 'ASC')
        ->nombre($name)
        ->email($email)
        ->paginate(5);
        return view('intranet.uusers.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('intranet.uusers.show',compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);

        $roles = Role::orderBy('created_at', 'ASC')->get();
        //dd($roles);
        return view('intranet.uusers.edit',compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
         request()->validate([
            'admin' => 'required',

        ]);



      /*  User::find($id)->update([
        'admin' => $request->admin,
        'roles' => assignRole($request->get('roles')),
    ]); */

    $user = User::find($id);
    $user->admin = $request->admin;
    $user->syncRoles($request->get('roles'));
    $user->save();

        //Usuario::find($id)->update($request->all());

        return redirect()->route('uusers.index')
                        ->with('success','Usuario actualizado exitosamente');
    }


    public function destroy($id)
    {
         User::find($id)->delete();

        return redirect()->route('uusers.index')
                        ->with('success','Usuario eliminado exitosamente');
    }
}
