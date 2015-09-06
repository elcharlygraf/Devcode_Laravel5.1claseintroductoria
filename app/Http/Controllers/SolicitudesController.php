<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;

class SolicitudesController extends Controller
{
    public function index()
    {
        
    }
    public function showSolicitud()
    {
        return view('web.solicitudes');
    }
    public function createSolicitud()
    {
        return view('web.solicitud');   
    }
    public function SaveSolicitud(Request $request)
    {
        //tomar los valores de los inputs
        //guardarlos en nuestra tabla.
        $solicitud = \App\Solicitud::create([
            'nombres'  => $request['nombres'],
            'numerocelular'  => $request['celular'],
            'email'  => $request['email'],
            'piso'  => $request['piso'],
            'comentario'  => $request['comentario'],
            'fecha'  => $request['fecha'],
            'hora'  => $request['hora'],
            'qtyhoras'  => $request['qtyhora'],
            ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
