<?php

namespace App\Http\Controllers;

use App\Mail\NotificacionApruebaOrden;
use App\Mail\NotificacionRechazaOrden;
use App\Models\Cliente;
use App\Models\DetallesOrden;
use App\Models\OrdenCliente;
use App\Models\OrdenReceta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrdenesController extends Controller
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
        $data = OrdenCliente::orderBy('created_at', 'desc')->get();
        return view('panel.ordenes.index', compact('data'));
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
    public function show($id)
    {
        $data = OrdenCliente::where('id', $id)->with('cliente')->first();
        $orden = DetallesOrden::where('orden_id', $data->id)->get();
        $recetas = OrdenReceta::where('orden_id', $data->id)->get();
        return view('panel.ordenes.show', compact('data', 'orden', 'recetas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aprueba($id)
    {

        $registro = OrdenCliente::where('id', $id)->first();
        $registro->estatus = 'Aprobado';
        $registro->save();

        $orden = OrdenCliente::where('id', $id)->first();
        $cliente = Cliente::where('id', $orden->cliente_id)->first();
        $email = $cliente->user->email;

        $mailable = new NotificacionApruebaOrden($orden);
        Mail::to($email)->send($mailable);

        return redirect('admin/ordenes')->with('success', 'Orden Aprobada Exitosamente');
    }
    /**
     * fORMCULARIO DE RECHAZO
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = OrdenCliente::where('id', $id)->with('cliente')->first();
        return view('panel.ordenes.motivor', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rechazo(Request $request, $id)
    {
        $request->validate([
            'motivo_rechazo' => ['required'],
        ],
        [
            'motivo_rechazo.required' => 'El campo Motivo de Rechazo es obligatorio',
        ]);

        $dater = Carbon::now();
        $registro = OrdenCliente::where('id', $id)->first();
        $registro->motivo_rechazo = $request->motivo_rechazo;
        $registro->estatus = 'Rechazada';
        $registro->fecha_rechazo = $dater->format('Y-m-d');;
        $registro->save();

        $orden = OrdenCliente::where('id', $id)->first();
        $cliente = Cliente::where('id', $orden->cliente_id)->first();
        $email = $cliente->user->email;

        $mailable = new NotificacionRechazaOrden($orden);
        Mail::to($email)->send($mailable);

        return redirect('admin/ordenes')->with('success', 'Orden Rechazada Exitosamente');
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
