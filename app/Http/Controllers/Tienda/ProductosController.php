<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Str;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Producto::all();
        $carritoItems = \Cart::getContent();
        return view('tienda.producto.productos', compact('data', 'carritoItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $reques
     * @return \Illuminate\Http\Response
     */
    public function addCarrito(Request $request)
    {
        $datos = json_decode($request->productos, True);
        $codigo = Str::uuid(1);
        foreach ($datos as $item) {
            $registro = new Carrito();
            $registro->codigo = $codigo;
            $registro->producto_id = $item['idp'];
            $registro->producto_name = $item['namep'];
            $registro->producto_foto = $item['fotop'];
            $registro->urlshow = $item['urlShow'];
            $registro->producto_tipoventa = $item['condicionventa'];
            $registro->cantidad = $item['cantidad'];
            $registro->precio = $item['preciop'];
            $registro->save();
        }
        $data = Carrito::where('codigo', $codigo)->get();
        return view('tienda.carrito.carritocompra', compact('data', 'codigo'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $lotesProductos;
        $data = json_decode($request->productos);
        $productos = json_encode($data);
        return view('tienda.carrito.carritocompra', compact('productos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Carrito::where('codigo', $id)->get();
        return view('tienda.carrito.checkout', compact('data'));
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
