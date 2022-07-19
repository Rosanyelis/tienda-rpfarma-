<?php

namespace App\Http\Controllers;

use App\Models\RegistroCotizacion;
use App\Models\UserReclamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecetasMagistralesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RegistroCotizacion::all();
        return view('panel.recetas-magistrales.index', compact('data'));
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
        $conversacion = UserReclamo::where('solicitud_id', $id)->orderBy('created_at', 'desc')->get();
        return view('panel.recetas-magistrales.responder', compact('data', 'conversacion'));
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
            'precio_receta' => ['required'],
            'precio_despacho' => ['required'],
            'precio_total' => ['required'],
            'tiempo_despacho' => ['required'],
            'respuesta' => ['required'],
        ],
        [
            'respuesta.required' => 'El campo Mensaje de Respuesta es obligatorio',
        ]);

        if ($request->precio_total) {
            $dato = RegistroCotizacion::where('id_registro', $id)->first();
            $dato->precio = $request->precio_total;
            $dato->precio_despacho = $request->precio_despacho;
            $dato->precio_base = $request->precio_receta;
            $dato->tiempo_despacho = $request->tiempo_despacho;
            $dato->estado = 'Cotizado';
            $dato->save();
        }
        

        $registro = new UserReclamo();
        $registro->solicitud_id = $id;
        $registro->user_id = Auth::user()->id;
        $registro->mensaje = $request->respuesta;
        $registro->save();

        return redirect('/admin/recetas-magistrales')->with('success', 'Respuesta Enviada Exitosamente');
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
