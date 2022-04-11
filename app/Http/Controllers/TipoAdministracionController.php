<?php

namespace App\Http\Controllers;

use App\Models\TipoAdministracion;
use Illuminate\Http\Request;

class TipoAdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TipoAdministracion::all();
        return view('panel.tiposadministracion.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.tiposadministracion.create');
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
        ],
        [
            'name.required' => 'El campo Nombre de Categoría es obligatorio',
            'name.unique' => 'El valor del campo Nombre Categoría ya existe',
        ]);

        $registro = new TipoAdministracion();
        $registro->name = $request->name;
        $registro->estatus = 'Activo';
        $registro->save();

        return redirect('admin/configuraciones/tipos-administracion')->with('success', 'Registro Guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoAdministracion  $tipoAdministracion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoAdministracion $tipoAdministracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoAdministracion  $tipoAdministracion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = TipoAdministracion::where('id', $id)->count();
        if ($count>0) {
            $data = TipoAdministracion::where('id', $id)->first();
            return view('panel.tiposadministracion.edit', compact('data'));
        } else {
            return redirect('admin/configuraciones/tipos-administracion')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoAdministracion  $tipoAdministracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $count = TipoAdministracion::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'name' => ['required'],
            ],
            [
                'name.required' => 'El campo Nombre del tipo de administracion es obligatorio',
                'name.unique' => 'El valor del campo Nombre del tipo de aministracion ya existe',
            ]);

            $registro = TipoAdministracion::where('id', $id)->first();
            $registro->name = $request->name;
            $registro->estatus = 'Activo';
            $registro->save();

            return redirect('admin/configuraciones/tipos-administracion')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('admin/configuraciones/tipos-administracion')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoAdministracion  $tipoAdministracion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = TipoAdministracion::where('id', $id)->count();
        if ($count>0) {
            $record = TipoAdministracion::where('id', $id)->first();
            $record->estatus = 'Inactivo';
            $record->save();
            return response()->json(200);
        } else {
            return response()->json(404);
        }
    }
}
