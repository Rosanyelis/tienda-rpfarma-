<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\RegistroCotizacion;
use App\Models\User;
use App\Models\UserReclamo;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RecetarioMagistralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.recetario-magistral.cotizar', compact('carritoItems'));
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
        $request->validate([
            'nombre' => ['required'],
            'apellido' => ['required'],
            'rut' => ['required'],
            'direccion' => ['required'],
            'telefono' => ['required', 'numeric'],
            'email' => ['required'],
            'mensaje' => ['required'],
            'imagen' => ['required'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido.required' => 'El campo Apellido es obligatorio',
            'rut.required' => 'El campo Rut es obligatorio',
            'direccion.required' => 'El campo Direccion es obligatorio',
            'email.required' => 'El campo Correo es obligatorio',
            'telefono.required' => 'El campo Teléfono es obligatorio',
            'telefono.numeric' => 'El campo Teléfono debe ser sólo números, sin símbolos',
            'mensaje.required' => 'El campo Mensaje es obligatorio',
            'imagen.required' => 'El campo Receta es obligatorio',
        ]);

        # Validar que usuario existe
        $user = User::where('email', $request->email)->count();
        if ($user>0) {
            $dataUsuario = \App\Models\User::where('email', $request->email)->first();

            $date = Carbon::now();
            # Registar cotizacion
            $name = $dataUsuario->cliente->nombre.' '.$dataUsuario->cliente->apellido;
            $registro = new RegistroCotizacion();
            $registro->user_id = $dataUsuario->id;
            $registro->mail = $dataUsuario->email;
            $registro->nombre = $name;
            $registro->telefono = $request->telefono;
            $registro->mensaje = $request->mensaje;
            if ($request->file('imagen')) {
                $uploadPath = public_path('/storage/RecetasACotizar/');
                $file = $request->file('imagen');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $file->move($uploadPath, $fileName);
                $url = '/storage/RecetasACotizar/'.$fileName;
                $registro->imagen = $url;
            }
            $registro->direccion = $request->direccion;
            $registro->precio = 0;
            $registro->estado = 'Ingresado';
            $registro->fecha_creacion = $date;
            $registro->save();

            $dato = new UserReclamo();
            $dato->solicitud_id = $registro->id;
            $dato->cliente_id = $dataUsuario->cliente->id;
            $dato->mensaje = $request->mensaje;
            $dato->save();
        }else{
            $name = $request->nombre.' '.$request->apellido;
            $rol = \App\Models\Rol::where('name', 'Cliente')->first();
            $user = User::create([
                'name' => $name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'rol_id' => $rol->id,
                'estatus' => 'Activo',
            ]);

            $record = new Cliente();
            $record->user_id = $user->id;
            $record->nombre = $request->nombre;
            $record->apellido = $request->apellido;
            $record->rut = $request->rut;
            $record->direccion = $request->direccion;
            $record->telefono = $request->telefono;
            $record->save();

            $date = Carbon::now();
            # Registar cotizacion
            $registro = new RegistroCotizacion();
            $registro->user_id = $user->id;
            $registro->mail = $request->email;
            $registro->nombre = $name;
            $registro->telefono = $request->telefono;
            $registro->mensaje = $request->mensaje;
            if ($request->file('imagen')) {
                $uploadPath = public_path('/storage/RecetasACotizar/');
                $file = $request->file('imagen');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $file->move($uploadPath, $fileName);
                $url = '/storage/RecetasACotizar/'.$fileName;
                $registro->imagen = $url;
            }
            $registro->direccion = $request->direccion;
            $registro->precio = 0;
            $registro->estado = 'Ingresado';
            $registro->fecha_creacion = $date;
            $registro->save();

            $dato = new UserReclamo();
            $dato->solicitud_id = $registro->id;
            $dato->cliente_id = $record->id;
            $dato->mensaje = $request->mensaje;
            $dato->save();


            event(new Registered($user));

            Auth::login($user);
        }

        return redirect('/recetario-magistral')->with('success', 'Receta Enviada Exitosamente!');
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
