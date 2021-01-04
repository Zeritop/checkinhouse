<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      /*  $fotos = Foto::orderBy('created_at', 'ASC')
        ->paginate(4);
  
        return view('productos.index',compact('fotos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        return [
            'paginate' => [

            ],
            'fotos' => $fotos
        ];  */
        /*$fotos = Foto::orderBy('created_at', 'ASC')
        ->paginate(5);*/ 
        
       /*$fotos = DB::table('fotos')->join('fproductos', 'fproductos.id_producto', '=', 'fotos.id')
        ->distinct('nombre', 'fproductos.id_producto')
        ->paginate(5);*/
        
        $fotos = DB::table('fotos')->join('fproductos', 'fproductos.id_producto', '=', 'fotos.id')
        ->select('fotos.portada','fotos.name', 'fotos.descripcion', 'fproductos.id_producto', DB::raw('group_concat(fproductos.nombre) as images'))
        ->groupBy('fotos.portada', 'fotos.name', 'fotos.descripcion', 'fproductos.id_producto')
        ->paginate(5);

        $fotos_producto = DB::table('fotos')->join('fproductos', 'fproductos.id_producto', '=', 'fotos.id')
        ->select('fproductos.nombre')
        ->get();

         /*$fotos_producto = DB::table('fproductos')->join('fotos', 'fproductos.id_producto', '=', 'fotos.id')
         ->select('fotos.name', 'fotos.descripcion', 'fproductos.id_producto', DB::raw('group_concat(fproductos.nombre) as images'))
         //->distinct('fotos.id', 'fproductos.nombre', 'fotos.name', 'fotos.descripcion')
         ->groupBy('fotos.name', 'fotos.descripcion', 'fproductos.id_producto')
         //->having(DB::raw('count(fotos.name)', '>', 1))
         ->get();*/
         //dd($fotos_producto); 
            
        if($request->ajax()){
            return [
                'pagination' => [
                    'total'        => $fotos->total(),
                    'current_page' => $fotos->currentPage(),
                    'per_page'     => $fotos->perPage(),
                    'last_page'    => $fotos->lastPage(),
                    'from'         => $fotos->firstItem(),
                    'to'           => $fotos->lastPage(),
                ],
                'fotos' => $fotos
            ];
          }else{
            return view('productos.index',compact('fotos', 'fotos_producto'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
