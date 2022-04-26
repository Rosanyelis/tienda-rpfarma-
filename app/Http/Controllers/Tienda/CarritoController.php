<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\Carrito;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\OrdenCliente;
use App\Models\DetallesOrden;
use App\Models\OrdenReceta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class CarritoController extends Controller
{

    public function cartList()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.carrito.carritocompra', compact('carritoItems'));
    }

    public function addToCart(Request $request)
    {
        if ($request->quantity) {
            $cantidad = $request->quantity;
        }else{
            $cantidad = 1;
        }
        $producto = Producto::where('id', $request->id)->first();
        $precio = number_format($producto->precio_venta, 2, ",", "");

        \Cart::add(array(
            'id' => $producto->id,
            'price' => $precio,
            'quantity' => $cantidad,
            'name' => $producto->name,
            'attributes' => array(
                'foto' => $producto->foto,
                'tipo' => $producto->ficha->condicionventa->name,
            )
        ));

        return redirect($request->url)->with('success', 'Producto Añadido a Carrito Exitosamente!');
    }

    public function updateCart(Request $request)
    {
        $data = json_decode($request->productos, True);

        foreach ($data as $item) {
            $id = $item['id'];
            $cant = $item['quantity'];
            // $receta = $item['receta'];
            // if ($receta !== 'No lleva receta' || $receta !== null) {
            //     $file = $receta;
            //     // Decodificamos la imagen
            //     list($type, $receta) = explode(';', $receta);
            //     list(, $receta) = explode(',', $receta);
            //     if ($type == 'data:application/pdf') {
            //         list(, $type) = explode('data:application/', $type);
            //     }else{
            //         list(, $type) = explode('data:image/', $type);
            //     }
            //     $uploadPath = public_path('/storage/CarritoRecetas/');
            //     $uuid = Str::uuid(4);
            //     $fileName = $uuid . '.' . $type;
            //     file_put_contents($uploadPath.$fileName, base64_decode($receta));
            //     $urlreceta = '/storage/CarritoRecetas/'.$fileName;
            // }else{
            //     $urlreceta = null;
            // }

            $producto = Producto::where('id', $id)->first();
            $precio = number_format($producto->precio_venta, 0, ",", "");

            \Cart::remove($id);

            \Cart::add(array(
                'id' => $producto->id,
                'price' => $precio,
                'quantity' => $cant,
                'name' => $producto->name,
                'attributes' => array(
                    'foto' => $producto->foto,
                    'tipo' => $producto->ficha->condicionventa->name,
                    // 'receta' => $urlreceta,
                )
            ));


        }


        return redirect('/productos/ver-checkout')->with('success', 'Producto Actualizados en Carrito Exitosamente!');
    }

    public function checkout(){

        $carritoItems = \Cart::getContent();
        return view('tienda.carrito.checkout', compact('carritoItems'));
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
            'telefono' => ['required', 'numeric'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido.required' => 'El campo Apellido es obligatorio',
            'rut.required' => 'El campo Rut es obligatorio',
            'direccion.required' => 'El campo Direccion es obligatorio',
            'correo.required' => 'El campo Correo es obligatorio',
            'telefono.required' => 'El campo Teléfono es obligatorio',
            'telefono.numeric' => 'El campo Teléfono debe ser sólo números, sin símbolos',
        ]);

        $nro_orden = rand(5, 15);

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
        $record->nro_orden = $nro_orden;
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
            $data->save();
        }

        if ($request->recetas) {
            foreach ($request->recetas as $item => $val) {
                $data = new OrdenReceta();
                $data->orden_id = $idOrden;
                if (isset($val)) {
                    $uploadPath = public_path('/storage/Recetas/');
                    $extension = $val->getClientOriginalExtension();
                    $uuid = Str::uuid(4);
                    $fileName = $uuid . '.' . $extension;
                    $val->move($uploadPath, $fileName);
                    $url = '/storage/Recetas/'.$fileName;
                    $data->url_receta = $url;
                }
                $data->save();
            }
        }


        \Cart::clear();

        return redirect('/')->with('success', 'Orden Efectuada Exitosamente');
    }

}
