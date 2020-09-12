<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herramienta;
use App\Taller;
use App\Contenedor;
use App\TipoHerramienta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){

        //$this->middleware('auth');
        $this->middleware('permission:herramientas.create')->only(['create', 'store']);
        $this->middleware('permission:herramientas.index')->only(['index']);
        $this->middleware('permission:herramientas.show')->only(['show']);
        $this->middleware('permission:herramientas.edit')->only(['edit', 'update']);
        $this->middleware('permission:herramientas.destroy')->only(['destroy']);
    }

    public function index(Request $request)
    {

        $nombre = $request->get('nom_her');
        $alias = $request->get('alias_her');


        $herr_jj = DB::table('herramientas')->join('contenedors', 'cod_contenedor', '=', 'cod_contenedor_her')
                                            ->select('herramientas.id', 'alias_her',
                                                      'nombre_contenedor', 'nom_her')
                                            ->orderBy('herramientas.id')
                                            ->paginate(10);

        $ext2 = DB::table('herramientas')->where('nom_her', $nombre)->exists();
        $ext3 = DB::table('herramientas')->where('alias_her', $alias)->exists();

        $herramientas = Herramienta::orderBy('created_at', 'ASC')
        ->nombre($nombre)
        ->alias($alias)
        ->paginate(10);

        return view('intranet.herramientas.index',compact('herramientas', 'herr_jj', 'ext2', 'ext3'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $herramientaa = DB::table('tallers')->select('nombre_taller', 'cod_taller')->get();
      $herra_contenedor = DB::table('contenedors')->select('nombre_contenedor', 'cod_contenedor')->get();
      $tipo = DB::table('tipo_herramientas')->select('id', 'nombre_th')->get();


        return view('intranet.herramientas.create', compact('herramientaa', 'herra_contenedor', 'tipo'));
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
            'nom_her' => 'required',
            'alias_her' => 'required',
            'vida_her' => 'required',
            'prioridad_her' => 'required',
            'marca_her' => 'required',
            'medidas_her' => 'required',
            'id_tipo_herramienta' => 'required',
            'cod_contenedor_her' => 'required',

        ]);

        $valorMin = $request->amount;
        $valorMax = $request->amount1;
        $valorRes = intval($valorMax) - intval($valorMin);
        //dd(strval($valorRes));
        $valorConv = intval($valorMin);

        if(isset($_POST["chbx1"])){
          for ($i=0; $i < ($valorRes + 1); $i++) {
            $herramienta = new Herramienta;

            $herramienta->nom_her = $request->nom_her . " ". strval($valorConv);
            $herramienta->alias_her = $request->alias_her;
            $herramienta->prioridad_her = $request->prioridad_her;
            if($_FILES['foto_her']['name'] != null){
              $herramienta->foto_her = Storage::putFile('public', $request->file('foto_her'));
              $herramienta->foto_her = basename(Storage::putFile('public', $request->file('foto_her')));
            }else{
              $herramienta->foto_her = null;
            }
            $herramienta->medidas_her = strval($valorConv). " ". $request->medidas_her;
            $herramienta->id_tipo_herramienta = $request->id_tipo_herramienta;
            $herramienta->marca_her = $request->marca_her;
            $herramienta->vida_her = $request->vida_her;
            $herramienta->cod_contenedor_her = $request->cod_contenedor_her;
            $herramienta->save();
            $valorConv++;
          }
        }else{
          $herramienta = new Herramienta;

          $herramienta->nom_her = $request->nom_her;
          $herramienta->alias_her = $request->alias_her;
          $herramienta->prioridad_her = $request->prioridad_her;
          if($_FILES['foto_her']['name'] != null){
            $herramienta->foto_her = Storage::putFile('public', $request->file('foto_her'));
            $herramienta->foto_her = basename(Storage::putFile('public', $request->file('foto_her')));
          }else{
            $herramienta->foto_her = null;
          }
          $herramienta->medidas_her = $request->medidas_her;
          $herramienta->id_tipo_herramienta = $request->id_tipo_herramienta;
          $herramienta->marca_her = $request->marca_her;
          $herramienta->vida_her = $request->vida_her;
          $herramienta->cod_contenedor_her = $request->cod_contenedor_her;
          $herramienta->save();
        }
        //Herramienta::create($request->all());


        return redirect()->route('herramientas.index')
                        ->with('success','Herramienta creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $herr_jj = DB::table('herramientas')->join('contenedors', 'cod_contenedor', '=', 'cod_contenedor_her')
                                          ->select('nombre_contenedor')
                                          ->where('herramientas.id', $id)
                                          ->first();
      $tipoH = DB::table('herramientas')->join('tipo_herramientas', 'tipo_herramientas.id', '=', 'id_tipo_herramienta')
                                        ->select('nombre_th')
                                        ->where('herramientas.id', $id)
                                        ->first();

        $herramienta = Herramienta::find($id);
        return view('intranet.herramientas.show',compact('herramienta', 'herr_jj', 'tipoH'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $herr_cont = DB::table('herramientas')->join('contenedors', 'cod_contenedor', '=', 'cod_contenedor_her')
                                            ->select('nombre_contenedor')
                                            ->get();
      $herr_tall = DB::table('herramientas')->join('tallers', 'cod_taller', '=', 'cod_contenedor_her')
                                            ->select('nombre_taller')
                                            ->get();
       $herramientaa = DB::table('tallers')->select('nombre_taller', 'cod_taller')->get();
       $herra_contenedor = DB::table('contenedors')->select('nombre_contenedor', 'cod_contenedor')->get();
       $tipo = DB::table('tipo_herramientas')->select('id', 'nombre_th')->get();
        $herramienta = Herramienta::find($id);
        return view('intranet.herramientas.edit',compact('herramienta', 'herramientaa', 'herra_contenedor',
            'herr_cont', 'herr_tall', 'tipo'));
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
            'nom_her' => 'required',
            'vida_her' => 'required',
            'alias_her' => 'required',
            'prioridad_her' => 'required',
            'marca_her' => 'required',
            'medidas_her' => 'required',
            'id_tipo_herramienta' => 'required',
            'cod_contenedor_her' => 'required',

        ]);
        //Herramienta::find($id)->update($request->all());

        $herramienta = Herramienta::find($id);
        $herramienta->nom_her = $request->nom_her;
        $herramienta->alias_her = $request->alias_her;
        $herramienta->prioridad_her = $request->prioridad_her;
        if($_FILES['foto_her']['name'] != null){
          $herramienta->foto_her = Storage::putFile('public', $request->file('foto_her'));
          $herramienta->foto_her = basename(Storage::putFile('public', $request->file('foto_her')));
        }else{

        }
        $herramienta->medidas_her = $request->medidas_her;
        $herramienta->id_tipo_herramienta = $request->id_tipo_herramienta;
        $herramienta->marca_her = $request->marca_her;
        $herramienta->vida_her = $request->vida_her;
        $herramienta->cod_contenedor_her = $request->cod_contenedor_her;
        $herramienta->save();


        return redirect()->route('herramientas.index')
                        ->with('success','herramienta actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Herramienta::find($id)->delete();

        return redirect()->route('herramientas.index')
                        ->with('success','herramienta eliminada exitosamente');
    }
}
