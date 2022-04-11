<?php

namespace App\Http\Controllers;

use App\Models\CondicionVenta;
use Illuminate\Http\Request;

class CondicionVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CondicionVenta::all();
        return view('panel.condicionesventa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.condicionesventa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:categorias'],
            'descripcion' => ['required'],
        ],
        [
            'name.required' => 'El campo Nombre de Condiciones de venta es obligatorio',
            'name.unique' => 'El valor del campo Nombre Condiciones de venta  ya existe',
            'descripcion.required' => 'El campo Descripciones de Condición de Venta es obligatorio',
        ]);

        $registro = new CondicionVenta();
        $registro->name = $request->name;
        $registro->descripcion = $request->descripcion;
        $registro->estatus = 'Activo';
        $registro->save();

        return redirect('admin/configuraciones/condiciones-venta')->with('success', 'Registro Guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CondicionVenta  $condicionVenta
     * @return \Illuminate\Http\Response
     */
    public function show(CondicionVenta $condicionVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CondicionVenta  $condicionVenta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $count = CondicionVenta::where('id', $id)->count();
            if ($count>0) {
                $data = CondicionVenta::where('id', $id)->first();
                return view('panel.condicionesventa.edit', compact('data'));
            } else {
                return redirect('admin/configuraciones/condiciones-venta')->with('danger', 'Problemas para Mostrar el Registro.');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CondicionVenta  $condicionVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $count = CondicionVenta::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'name' => ['required', 'unique:categorias'],
                'descripcion' => ['required'],
            ],
            [
                'name.required' => 'El campo Nombre de Condiciones de venta es obligatorio',
                'name.unique' => 'El valor del campo Nombre Condiciones de venta  ya existe',
                'descripcion.required' => 'El campo Descripciones de Condición de Venta es obligatorio',
            ]);

            $registro = CondicionVenta::where('id', $id)->first();
            $registro->name = $request->name;
            $registro->descripcion = $request->descripcion;
            $registro->estatus = 'Activo';
            $registro->save();

            return redirect('admin/configuraciones/condiciones-venta')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('admin/configuraciones/condiciones-venta')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CondicionVenta  $condicionVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = CondicionVenta::where('id', $id)->count();
        if ($count>0) {
            $record = CondicionVenta::where('id', $id)->first();
            $record->estatus = 'Inactivo';
            $record->save();
            return response()->json(200);
        } else {
            return response()->json(404);
        }
    }
}
