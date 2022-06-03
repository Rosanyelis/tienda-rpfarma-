<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.auth.registro', compact('carritoItems'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registrarme(Request $request)
    {
        $request->validate([
            'nombre' => ['required'],
            'apellido' => ['required'],
            'rut' => ['required'],
            'direccion' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required'],
            'telefono' => ['required', 'numeric'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido.required' => 'El campo Apellido es obligatorio',
            'rut.required' => 'El campo Rut es obligatorio',
            'direccion.required' => 'El campo Direccion es obligatorio',
            'email.required' => 'El campo Correo es obligatorio',
            'password.required' => 'El campo Contraseña es obligatorio',
            'telefono.required' => 'El campo Teléfono es obligatorio',
            'telefono.numeric' => 'El campo Teléfono debe ser sólo números, sin símbolos',
        ]);

        $name = $request->nombre.' '.$request->apellido;
        $rol = \App\Models\Rol::where('name', 'Cliente')->first();
        $user = User::create([
            'name' => $name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $rol->id,
            'estatus' => 'Activo',
        ]);

        event(new Registered($user));

        Auth::login($user);

        $registro = new Cliente();
        $registro->user_id = $user->id;
        $registro->nombre = $request->nombre;
        $registro->apellido = $request->apellido;
        $registro->rut = $request->rut;
        $registro->direccion = $request->direccion;
        $registro->telefono = $request->telefono;
        $registro->save();

        return redirect('/')->with('success', 'Se ha Registrado con éxito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ],
        [
            'email.required' => 'El campo Correo es obligatorio',
            'email.email' => 'El campo Correo debe tener un formato example@example.com',
            'password.required' => 'El campo Contraseña es obligatorio',

        ]);

        $rol = \App\Models\Rol::where('name', 'Cliente')->first();

        $user = User::where('email', $request->email)->where('rol_id', $rol->id)->count();

        if ($user>0) {
            if (!Auth::attempt($credentials)){
                throw ValidationException::withMessages([
                    'email' => trans('auth.failed'),
                ]);
            }

            return redirect('/')->with('success', 'Sesión Iniciada');
        }else{
            return redirect('/')->with('error', 'El correo ingresado no se encuentra registrado');
        }


    }
    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function close(Request $request)
    {
        Auth::logout();
        // $request->session()->forget('sesionTienda');

        return redirect('/')->with('success', 'Sesión Cerrada Exitosamente!');;
    }

}
