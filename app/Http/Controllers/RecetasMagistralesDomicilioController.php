<?php

namespace App\Http\Controllers;

use App\Models\RegistroCotizacion;
use Illuminate\Http\Request;

class RecetasMagistralesDomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RegistroCotizacion::where('estado', 'Pagado por Cliente')->get();
        return view('panel.recetastemperatura.index', compact('data'));
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
        $data = RegistroCotizacion::where('id_registro', $id)->first();
        return view('panel.recetastemperatura.receta', compact('data'));
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
            'temperatura_entrega' => ['required'],
        ],
        [
            'temperatura_entrega.required' => 'El campo Temperatura de Entrega es obligatorio',
        ]);

        $dato = RegistroCotizacion::where('id_registro', $id)->first();
        $dato->temperatura_entrega = $request->temperatura_entrega;
        $dato->save();

        return redirect('/admin/recetas-a-domicilio')->with('success', 'Temperatura Agregada Exitosamente');
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
