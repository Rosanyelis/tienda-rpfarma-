<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('panel.usuarios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::where('name', '!=', 'Developer')->where('name', '!=', 'Cliente')->get();
        return view('panel.usuarios.create', compact('roles'));
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
            'name' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'max:8'],
            'rol_id' => ['required', 'uuid'],
        ],
        [
            'name.required' => 'El campo Nombre es obligatorio',
            'email.required' => 'El campo Correo es obligatorio',
            'password.required' => 'El campo Contraseña es obligatorio',
            'password.max' => 'El campo Contraseña debe contener máximo 8 carácteres',
            'rol_id.required' => 'El campo Rol es obligatorio',
            'rol_id.uuid' => 'El campo Rol es obligatorio',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $request->rol_id,
            'estatus' => 'Activo',
        ]);

        return redirect('admin/configuraciones/usuarios')->with('success', 'Se ha Registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roles = Rol::where('name', '!=', 'Developer')->where('name', '!=', 'Cliente')->get();
        $data = User::where('id', $id)->first();
        return view('panel.usuarios.edit', compact('roles', 'data'));
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
