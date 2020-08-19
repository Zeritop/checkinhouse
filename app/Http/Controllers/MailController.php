<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Calendario;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Mail::send('emails.contact', $request->all(), function($msj){
            $msj->subject('Correo Cotizaciones');
            $msj->to('cotinhouse@gmail.com');

        });

        $detalle = $request->marca. " ". $request->modelo;
        $fecha = $request->dia. " ". $request->hora;

        $calendario = new Calendario;
        $calendario->name = $request->servicio;
        $calendario->details = $detalle;
        $calendario->start = $fecha;
        $calendario->end = $fecha;
        $calendario->color = '#1976D2';
        $calendario->id_user = auth()->id();
        $calendario->save();


         Session::flash('message', 'Mensaje enviado correctamente');
         return Redirect::to('serviciosss');
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
