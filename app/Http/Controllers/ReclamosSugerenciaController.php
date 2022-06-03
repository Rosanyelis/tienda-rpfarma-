<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NotificacionReclamoCerrado;
use App\Mail\SeguimientoReclamo;
use App\Models\Reclamo;
use App\Models\UserReclamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReclamosSugerenciaController extends Controller
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
        $data = Reclamo::all();
        return view('panel.reclamos.index', compact('data'));
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
        $data = Reclamo::where('id', $id)->first();
        $conversacion = UserReclamo::where('reclamo_id', $id)->orderBy('created_at', 'desc')->get();
        return view('panel.reclamos.responder', compact('data', 'conversacion'));
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
        $request->validate([
            'respuesta' => ['required'],
        ],
        [
            'respuesta.required' => 'El campo Mensaje de Respuesta es obligatorio',
        ]);

        $registro = new UserReclamo();
        $registro->reclamo_id = $id;
        $registro->user_id = Auth::user()->id;
        $registro->mensaje = $request->respuesta;
        $registro->save();

        // data de reclamo y respuesta
        $reclamo = Reclamo::where('id', $id)->first();
        $respuesta = UserReclamo::where('id', $registro->id)->first();
        // Receptor de respuesta
        $email = $reclamo->user->email;

        // Envío de correo
        $mailable = new SeguimientoReclamo($reclamo, $respuesta);
        Mail::to($email)->send($mailable);

        return redirect('/admin/reclamos-y-sugerencias')->with('success', 'Respuesta Enviada Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Reclamo::where('id', $id)->count();
        if ($count > 0) {
            $registro = Reclamo::where('id', $id)->first();
            $registro->estatus = 'Cerrado';
            $registro->save();

            // data de reclamo y respuesta
            $reclamo = Reclamo::where('id', $id)->first();
            // Receptor de respuesta
            if ($reclamo->user) {
                $email = $reclamo->user->email;
                // Envío de correo
                $mailable = new NotificacionReclamoCerrado($reclamo);
                Mail::to($email)->send($mailable);
            }

            return redirect('/admin/reclamos-y-sugerencias')->with('success', 'Respuesta Enviada Exitosamente');
        }else{
            return redirect('/admin/reclamos-y-sugerencias')->with('error', 'No se ha podido cerra el reclamo');
        }

    }
}
