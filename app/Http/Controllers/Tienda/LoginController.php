<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{


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
            $request->session()->regenerate();
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
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Sesión Cerrada Exitosamente!');;
    }

}
