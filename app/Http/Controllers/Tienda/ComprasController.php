<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\DetallesOrden;
use App\Models\OrdenCliente;
use App\Models\OrdenReceta;
use App\Models\Reclamo;
use App\Models\UserReclamo;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComprasController extends Controller
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
        $ordenes = OrdenCliente::where('cliente_id', Auth::user()->cliente->id)->get();
        $reclamos = Reclamo::where('user_id', Auth::user()->id)->get();
        $carritoItems = \Cart::getContent();
        return view('tienda.usuario.perfil', compact('carritoItems', 'ordenes', 'reclamos'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showorden($id)
    {
        $data = OrdenCliente::where('id', $id)->first();
        $orden = DetallesOrden::where('orden_id', $data->id)->get();
        $recetas = OrdenReceta::where('orden_id', $data->id)->get();
        $carritoItems = \Cart::getContent();
        return view('tienda.ordenes.show', compact('carritoItems','data', 'orden', 'recetas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showreclamo($id)
    {
        $data = Reclamo::where('id', $id)->first();
        $conversacion = UserReclamo::where('reclamo_id', $id)->orderBy('created_at', 'asc')->get();
        $carritoItems = \Cart::getContent();
        return view('tienda.misreclamos.show', compact('carritoItems','data', 'conversacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function responsereclamo(Request $request, $id)
    {
        $request->validate([
            'respuesta' => ['required'],
        ],
        [
            'respuesta.required' => 'El campo Mensaje de Respuesta es obligatorio',
        ]);

        $registro = new UserReclamo();
        $registro->reclamo_id = $id;
        $registro->cliente_id = Auth::user()->id;
        $registro->mensaje = $request->respuesta;
        $registro->save();

        // data de reclamo y respuesta
        // $reclamo = Reclamo::where('id', $id)->first();
        // $respuesta = UserReclamo::where('id', $registro->id)->first();
        // Receptor de respuesta
        // $email = $reclamo->user->email;

        // Envío de correo
        // $mailable = new SeguimientoReclamo($reclamo, $respuesta);
        // Mail::to($email)->send($mailable);

        return redirect('/mi-perfil/'.$id.'/ver-reclamo')->with('success', 'Respuesta Enviada Exitosamente');
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
