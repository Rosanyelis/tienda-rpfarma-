<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\OrdenCliente;
use App\Models\DetallesOrden;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CarritoController extends Controller
{

    public function cartList()
    {
        $carritoItems = \Cart::getContent();
        $categorias = Categoria::all();
        return view('tienda.carrito.carritocompra', compact('carritoItems', 'categorias'));
    }

    public function addToCart(Request $request)
    {

        $producto = Producto::where('id', $request->id)->first();

        $precio = number_format($producto->precio_venta, 2, ",", "");

        \Cart::add(array(
            'id' => $producto->id,
            'price' => $precio,
            'quantity' => 1,
            'name' => $producto->name,
            'attributes' => array(
                'foto' => $producto->foto,
                'tipo' => $producto->ficha->condicionventa->name,
                'receta' => null,
            )
        ));

        return redirect($request->url)->with('success', 'Producto Añadido a Carrito Exitosamente!');
    }

    public function updateCart(Request $request)
    {
        foreach ($request->producto as $key => $valueId) {
        $producto = Producto::where('id', $valueId)->first();
        $precio = number_format($producto->precio_venta, 0, ",", "");
           foreach ($request->quantity as $item => $cant) {

            \Cart::update($valueId, array(
                'price' => $precio,
                'quantity' => $cant,
                'name' => $producto->name,
                'attributes' => array(
                    'foto' => $producto->foto,
                    'tipo' => $producto->ficha->condicionventa->name,
                    'receta' => null,
                )
                ));
           }
        }


        return redirect('/productos/ver-checkout')->with('success', 'Producto Actualizados en Carrito Exitosamente!');
    }

    public function checkout(){

        $carritoItems = \Cart::getContent();
        $categorias = Categoria::all();
        return view('tienda.carrito.checkout', compact('carritoItems', 'categorias'));
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);

        return redirect($request->url)->with('success', 'Producto Eliminado del Carrito Exitosamente!');
    }

    public function clearAllCart(Request $request)
    {
        \Cart::clear();

        return redirect($request->url)->with('success', 'Productos Removidos del Carrito Exitosamente!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addShop(Request $request)
    {
        $request->validate([
            'nombre' => ['required'],
            'apellido' => ['required'],
            'rut' => ['required'],
            'direccion' => ['required'],
            'correo' => ['required'],
            'telefono' => ['required'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido.required' => 'El campo Nombre es obligatorio',
            'rut.required' => 'El campo Nombre es obligatorio',
            'direccion.required' => 'El campo Direccion es obligatorio',
            'correo.required' => 'El campo Correo es obligatorio',
            'telefono.required' => 'El campo Teléfono es obligatorio',
        ]);

        $registro = new Cliente();
        $registro->nombre = $request->nombre;
        $registro->apellido = $request->apellido;
        $registro->rut = $request->rut;
        $registro->direccion = $request->direccion;
        $registro->correo = $request->correo;
        $registro->telefono = $request->telefono;
        $registro->save();

        $idCliente = $registro->id;

        $record = new OrdenCliente();
        $record->cliente_id = $idCliente;
        $record->monto = $request->monto;
        $record->direccion_compras = $request->direccion;
        $record->direccion_pedido = $request->direccion;
        $record->estatus = 'Activo';
        $record->save();

        $idOrden = $record->id;
        $carritoItems = \Cart::getContent();

        foreach ($carritoItems as $item) {

            $productos = Producto::where('id', $item->id)->first();

            $data = new DetallesOrden();
            $data->orden_id = $idOrden;
            $data->producto_id = $productos->id;
            $data->sku = $productos->sku;
            $data->cantidad = $item->quantity;
            $data->precio = $item->price;
            $data->url_receta = null;
            $data->save();
        }

        \Cart::clear();

        return redirect('/')->with('success', 'Orden Efectuada Exitosamente');
    }

}
