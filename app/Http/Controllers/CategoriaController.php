<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categoria::orderBy('name', 'asc')->get();
        return view('panel.categorias.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.categorias.create');
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

        $registro = new Categoria();
        $registro->name = $request->name;
        $registro->estatus = 'Activo';
        $registro->save();

        return redirect('admin/configuraciones/categorias')->with('success', 'Registro Guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Categoria::where('id', $id)->count();
        if ($count>0) {
            $data = Categoria::where('id', $id)->first();
            return view('panel.categorias.edit', compact('data'));
        } else {
            return redirect('admin/configuraciones/categorias')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Categoria::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'name' => ['required'],
            ],
            [
                'name.required' => 'El campo Nombre de Categoría es obligatorio',
                'name.unique' => 'El valor del campo Nombre Categoría ya existe',
            ]);

            $registro = Categoria::where('id', $id)->first();
            $registro->name = $request->name;
            $registro->estatus = 'Activo';
            $registro->save();

            return redirect('admin/configuraciones/categorias')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('admin/configuraciones/categorias')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Categoria::where('id', $id)->count();
        if ($count>0) {
            $record = Categoria::where('id', $id)->first();
            $record->estatus = 'Inactivo';
            $record->save();
            return response()->json(200);
        } else {
            return response()->json(404);
        }
    }
}
