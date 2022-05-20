<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\Reclamo;
use App\Models\UserReclamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReclamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritoItems = \Cart::getContent();
        $reclamos = Reclamo::orderBy('created_at', 'asc')->paginate(10);
        return view('tienda.reclamos.index', compact('carritoItems', 'reclamos'));
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
            'name' => ['required'],
            'tipo' => ['required'],
            'comentario' => ['required'],
        ],
        [
            'name.required' => 'El campo Nombre es obligatorio',
            'tipo.required' => 'El campo Tipo es obligatorio',
            'comentario.required' => 'El campo Comentario es obligatorio',
        ]);

        if (!Auth::user()) {
            return redirect('/libro-electronico-de-reclamos-y-sugerencias')->with('error', 'No puede publicar comentario si no esta logueado!');
        }


        $aleatorio = rand(1,10000);
        switch ($request->tipo) {
            case $request->tipo == 'Opinion':
                $codigo = 'O-'.$aleatorio;
                break;
            case $request->tipo == 'Sugerencia':
                $codigo = 'S-'.$aleatorio;
                break;
            case $request->tipo == 'Reclamo':
                $codigo = 'R-'.$aleatorio;
                break;
            default:
                $codigo = 'R-'.$aleatorio;
                break;
        }


        $registro = new Reclamo();
        $registro->user_id = Auth::user()->id;
        $registro->codigo = $codigo;
        $registro->name = $request->name;
        $registro->comentario = $request->comentario;
        $registro->tipo = $request->tipo;
        $registro->estatus = 'Abierto';
        $registro->save();

        $record = new UserReclamo();
        $record->cliente_id = Auth::user()->id;
        $record->reclamo_id = $registro->id;
        $record->mensaje = $request->comentario;
        $record->save();

        return redirect('/libro-electronico-de-reclamos-y-sugerencias')->with('success', 'Su comentario fué publicado exitosamente!');
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
