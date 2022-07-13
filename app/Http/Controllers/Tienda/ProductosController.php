<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
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
                        ->where('productos.estatus', 'Activo')
                        ->paginate(9);

        return view('tienda.producto.productos', compact('carritoItems', 'data'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carritoItems = \Cart::getContent();
        $producto = Producto::where('id', $id)->first();
        return view('tienda.producto.fichaproducto', compact('producto', 'carritoItems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filtrocategoria($id)
    {
        $data = DB::table('productos')
                    ->join('ficha_tecnicas', 'productos.id', '=', 'ficha_tecnicas.producto_id')
                    ->join('condicion_ventas', 'ficha_tecnicas.condicion_venta_id', '=', 'condicion_ventas.id')
                    ->select('productos.*', 'ficha_tecnicas.principio_activo as principio_activo', 'condicion_ventas.name as condicion_venta')
                    ->orderBy('name', 'asc')
                    ->where('categoria_id', $id)
                    ->where('productos.estatus', 'Activo')
                    ->paginate(9);

        $carritoItems = \Cart::getContent();
        return view('tienda.producto.productos', compact('data','carritoItems'));
    }

    public function bioequivalentes($principio_activo)
    {
        $data = DB::table('productos')
                    ->join('ficha_tecnicas', 'productos.id', '=', 'ficha_tecnicas.producto_id')
                    ->join('condicion_ventas', 'ficha_tecnicas.condicion_venta_id', '=', 'condicion_ventas.id')
                    ->select('productos.*', 'ficha_tecnicas.principio_activo as principio_activo', 'condicion_ventas.name as condicion_venta')
                    ->orderBy('name', 'asc')
                    ->where('principio_activo', 'LIKE', "$principio_activo")
                    ->where('productos.estatus', 'Activo')
                    ->paginate(9);

        $carritoItems = \Cart::getContent();
        return view('tienda.producto.productos', compact('data','carritoItems'));
    }

    public function buscarMedicamentos()
    {
        $data = Categoria::where('name', 'Cuidado Personal')->first();
        $productos = Producto::where('categoria_id', $data->id)->get();
        $carritoItems = \Cart::getContent();
        return view('tienda.medicamentos.buscador', compact('productos', 'carritoItems'));
    }

}
