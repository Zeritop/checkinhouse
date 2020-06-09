<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taller;

class TallerController extends Controller
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
      $tallers = Taller::orderBy('created_at', 'ASC')
      ->paginate(5);

      return view('intranet.tallers.index',compact('tallers'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.tallers.create');
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
          'cod_taller' => 'required',
          'nombre_taller' => 'required',
          'dir_taller' => 'required',
          'cap_taller' => 'required',
          'tel_taller' => 'required',

      ]);

      Taller::create($request->all());

      return redirect()->route('tallers.index')
                      ->with('success','Taller creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $taller = Taller::find($id);
      return view('intranet.tallers.show',compact('taller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $taller = Taller::find($id);
      return view('intranet.tallers.edit',compact('taller'));
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
          'cod_taller' => 'required',
          'nombre_taller' => 'required',
          'dir_taller' => 'required',
          'cap_taller' => 'required',
          'tel_taller' => 'required',

      ]);

      Taller::find($id)->update($request->all());

      return redirect()->route('tallers.index')
                      ->with('success','taller actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Taller::find($id)->delete();

     return redirect()->route('tallers.index')
                     ->with('success','taller eliminado exitosamente');
    }
}
