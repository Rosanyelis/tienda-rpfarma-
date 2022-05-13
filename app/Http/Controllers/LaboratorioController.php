<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laboratorio::all();
        return view('panel.laboratorio.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.laboratorio.create');
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
            'name.required' => 'El campo Nombre de Laboratorio es obligatorio',
            'name.unique' => 'El valor del campo Nombre Laboratorio ya existe',
        ]);

        $registro = new Laboratorio();
        $registro->name = $request->name;
        $registro->estatus = 'Activo';
        $registro->save();

        return redirect('admin/configuraciones/laboratorio')->with('success', 'Registro Guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Laboratorio::where('id', $id)->count();
        if ($count>0) {
            $data = Laboratorio::where('id', $id)->first();
            return view('panel.laboratorio.edit', compact('data'));
        } else {
            return redirect('admin/configuraciones/laboratorio')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Laboratorio::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'name' => ['required'],
            ],
            [
                'name.required' => 'El campo Nombre de Categoría es obligatorio',
                'name.unique' => 'El valor del campo Nombre Categoría ya existe',
            ]);

            $registro = Laboratorio::where('id', $id)->first();
            $registro->name = $request->name;
            $registro->estatus = 'Activo';
            $registro->save();

            return redirect('admin/configuraciones/laboratorio')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('admin/configuraciones/laboratorio')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $count = Laboratorio::where('id', $id)->count();
        if ($count>0) {
            $record = Laboratorio::where('id', $id)->first();
            $record->estatus = 'Inactivo';
            $record->save();
            return response()->json(200);
        } else {
            return response()->json(404);
        }
    }
}
