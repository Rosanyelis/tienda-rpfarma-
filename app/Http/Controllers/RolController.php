<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rol::all();
        return view('panel.roles.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.roles.create');
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
            'name' => ['required', 'unique:rols'],
            'descripcion' => ['required'],
        ],
        [
            'name.required' => 'El campo Nombre de Rol es obligatorio',
            'name.unique' => 'El valor del campo Nombre Rol ya existe',
            'descripcion.required' => 'El campo Descripción de Rol es obligatorio',
        ]);

        $registro = new Rol();
        $registro->name = $request->name;
        $registro->descripcion = $request->descripcion;
        $registro->estatus = 'Activo';
        $registro->save();

        return redirect('admin/configuraciones/roles')->with('success', 'Registro Guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Rol::where('id', $id)->count();
        if ($count>0) {
            $data = Rol::where('id', $id)->first();
            return view('panel.roles.edit', compact('data'));
        } else {
            return redirect('admin/configuraciones/roles')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Rol::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'name' => ['required'],
            ],
            [
                'name.required' => 'El campo Nombre de Rol es obligatorio',
                'name.unique' => 'El valor del campo Nombre Rol ya existe',
            ]);

            $registro = Rol::where('id', $id)->first();
            $registro->name = $request->name;
            $registro->estatus = 'Activo';
            $registro->save();

            return redirect('admin/configuraciones/roles')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('admin/configuraciones/roles')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Rol::where('id', $id)->count();
        if ($count>0) {
            $record = Rol::where('id', $id)->first();
            $record->estatus = 'Inactivo';
            $record->save();
            return response()->json(200);
        } else {
            return response()->json(404);
        }
    }
}
