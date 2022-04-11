<?php

namespace App\Http\Controllers;

use App\Models\FormaFarmaceutica;
use Illuminate\Http\Request;

class FormaFarmaceuticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = FormaFarmaceutica::all();
        return view('panel.formasfarmaceuticas.index', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.formasfarmaceuticas.create');
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
            'name.required' => 'El campo Nombre de Forma Farmaceutica es obligatorio',
            'name.unique' => 'El valor del campo Nombre Forma Farmaceutica ya existe',
        ]);

        $registro = new FormaFarmaceutica();
        $registro->name = $request->name;
        $registro->estatus = 'Activo';
        $registro->save();

        return redirect('admin/configuraciones/formas-farmaceuticas')->with('success', 'Registro Guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormaFarmaceutica  $formaFarmaceutica
     * @return \Illuminate\Http\Response
     */
    public function show(FormaFarmaceutica $formaFarmaceutica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormaFarmaceutica  $formaFarmaceutica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = FormaFarmaceutica::where('id', $id)->count();
        if ($count>0) {
            $data = FormaFarmaceutica::where('id', $id)->first();
            return view('panel.formasfarmaceuticas.edit', compact('data'));
        } else {
            return redirect('admin/configuraciones/formas-farmaceuticas')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormaFarmaceutica  $formaFarmaceutica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = FormaFarmaceutica::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'name' => ['required'],
            ],
            [
                'name.required' => 'El campo Nombre de Forma Farmaceutica es obligatorio',
                'name.unique' => 'El valor del campo Nombre Forma Farmaceutica ya existe',
            ]);

            $registro = FormaFarmaceutica::where('id', $id)->first();
            $registro->name = $request->name;
            $registro->estatus = 'Activo';
            $registro->save();

            return redirect('admin/configuraciones/formas-farmaceuticas')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('admin/configuraciones/formas-farmaceuticas')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormaFarmaceutica  $formaFarmaceutica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = FormaFarmaceutica::where('id', $id)->count();
        if ($count>0) {
            $record = FormaFarmaceutica::where('id', $id)->first();
            $record->estatus = 'Inactivo';
            $record->save();
            return response()->json(200);
        } else {
            return response()->json(404);
        }
    }
}
