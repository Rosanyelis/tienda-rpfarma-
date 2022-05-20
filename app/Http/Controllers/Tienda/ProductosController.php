<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $carritoItems = \Cart::getContent();
        $data = DB::table('productos')
                        ->join('ficha_tecnicas', 'productos.id', '=', 'ficha_tecnicas.producto_id')
                        ->join('condicion_ventas', 'ficha_tecnicas.condicion_venta_id', '=', 'condicion_ventas.id')
                        ->select('productos.*', 'ficha_tecnicas.principio_activo as principio_activo', 'condicion_ventas.name as condicion_venta')
                        ->orderBy('name', 'asc')
                        ->where('productos.name', 'LIKE', "%$name%")
                        ->where('principio_activo', 'LIKE', "%$name%")
                        ->where('productos.estatus', 'Activo')
                        ->paginate(9);

        return view('tienda.producto.productos', compact('carritoItems', 'data'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filtrocategoria($id)
    {
        $data = Producto::where('categoria_id', $id)->where('estatus', 'Activo')->paginate(9);
        $carritoItems = \Cart::getContent();
        return view('tienda.producto.productoscategoria', compact('data','carritoItems'));
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
