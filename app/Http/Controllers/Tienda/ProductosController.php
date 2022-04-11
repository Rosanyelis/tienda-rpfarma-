<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Carrito;
use App\Models\FichaTecnica;
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
        $categorias = Categoria::all();
        $data = Producto::all();
        return view('tienda.producto.productos', compact('data', 'categorias'));
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
        $categorias = Categoria::all();
        $data = Carrito::where('codigo', $codigo)->get();
        return view('tienda.carrito.carritocompra', compact('data', 'categorias', 'codigo'));

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
        $categorias = Categoria::all();
        $data = json_decode($request->productos);
        $productos = json_encode($data);
        return view('tienda.carrito.carritocompra', compact('productos', 'categorias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias = Categoria::all();
        $data = Carrito::where('codigo', $id)->get();
        return view('tienda.carrito.checkout', compact('data', 'categorias'));
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

     /**
     * Buscar data de producto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscar($id)
    {
        $data = Producto::where('id', $id)->first();
        $data['forma'] = FichaTecnica::where('producto_id', $id)->with('condicionventa')->first();
        return response()->json($data);
    }
}
