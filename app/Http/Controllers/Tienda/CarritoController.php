<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\OrdenGenerada;
use App\Models\Carrito;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\DetallesOrden;
use App\Models\OrdenCliente;
use App\Models\OrdenReceta;
use App\Models\Producto;
use App\Models\RegistroCotizacion;
use App\Models\User;
use Darryldecode\Cart\Cart;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CarritoController extends Controller
{


    public function cartList()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.carrito.carritocompra', compact('carritoItems'));
    }

    public function addToCart(Request $request)
    {
        if ($request->id) {
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
                    'receta' => null,
                )
            ));
        }elseif ($request->id_registro) {
            if ($request->quantity) {
                $cantidad = $request->quantity;
            }else{
                $cantidad = 1;
            }
            $producto = RegistroCotizacion::where('id_registro', $request->id_registro)->first();
            $precio = number_format($producto->precio, 2, ",", "");

            \Cart::add(array(
                'id' => $producto->id_registro,
                'price' => $precio,
                'quantity' => $cantidad,
                'name' => 'Receta Magistral',
                'attributes' => array(
                    'foto' => $producto->imagen,
                    'tipo' => 'Producto de Recetario Magitral',
                    'receta' => null,
                )
            ));
        }


        return redirect($request->url)->with('success', 'Producto Añadido a Carrito Exitosamente!');
    }

    public function updateCart(Request $request)
    {

        $carritoItems = \Cart::getContent();
        $cant = count($carritoItems);

        if($cant>0){
            /** Procesamos las imagenes de las recetas para guardarlas en galeria */
            $arrayImg = [];
            if ($request->recetas) {
                foreach ($request->recetas as $key => $value) {
                    $uploadPath = public_path('/storage/RecetaTienda/');
                    $file = $value;
                    $extension = $file->getClientOriginalExtension();
                    $uuid = Str::uuid(4);
                    $fileName = $uuid . '.' . $extension;
                    $file->move($uploadPath, $fileName);
                    $url = '/storage/RecetaTienda/'.$fileName;
                    OrdenReceta::create(['url_receta' => $url]);

                    array_push($arrayImg, $url);
                }
            }

            /** Procesa los productos seleccionados por el cliente */
            $data = json_decode($request->productos, True);
            foreach ($data as $item) {
                if ($item['receta'] == 'Producto de Recetario Magitral') {
                    $id = $item['id'];
                    $cant = $item['quantity'];
                    $producto = RegistroCotizacion::where('id_registro', $id)->first();
                    $precio = number_format($producto->precio, 2, ",", "");

                    \Cart::remove($id);

                    \Cart::add(array(
                        'id' => $producto->id_registro,
                        'price' => $precio,
                        'quantity' => $cant,
                        'name' => 'Receta Magistral',
                        'attributes' => array(
                            'foto' => $producto->imagen,
                            'tipo' => 'Producto de Recetario Magitral',
                            'receta' => null,
                        )
                    ));
                }else{
                    $id = $item['id'];
                    $cant = $item['quantity'];
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
                            'receta' => $arrayImg,
                        )
                    ));
                }

            }


            return redirect('/productos/ver-checkout')->with('success', 'Producto Actualizados en Carrito Exitosamente!');
        }else{
            return redirect('/productos/ver-carrito-de-compras')->with('error', 'Debe haber productos en carrito para seguir con la compra!');
        }

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

    public function removeCartAjax($id)
    {
        \Cart::remove($id);
        return redirect('/productos/ver-carrito-de-compras')->with('success', 'Producto Eliminado del Carrito Exitosamente!');
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
        // dd(\Cart::getContent());
        if ($request->cuenta == '1') {
            $request->validate([
                'nombre' => ['required'],
                'apellido' => ['required'],
                'rut' => ['required'],
                'direccion' => ['required'],
                'email' => ['required', 'unique:users'],
                'password' => ['required'],
                'telefono' => ['required', 'numeric'],
                'checkout_payment_method' => ['required'],
            ],
            [
                'nombre.required' => 'El campo Nombre es obligatorio',
                'apellido.required' => 'El campo Apellido es obligatorio',
                'rut.required' => 'El campo Rut es obligatorio',
                'direccion.required' => 'El campo Direccion es obligatorio',
                'email.required' => 'El campo Correo es obligatorio',
                'password.required' => 'El campo Contraseña es obligatorio',
                'telefono.required' => 'El campo Teléfono es obligatorio',
                'telefono.numeric' => 'El campo Teléfono debe ser sólo números, sin símbolos',
                'checkout_payment_method.required' => 'La selección de Tipo de Recepción es obligatorio',
            ]);
            $name = $request->nombre.' '.$request->apellido;
            $nro_orden = rand(5, 15);
            $rol = \App\Models\Rol::where('name', 'Cliente')->first();
            $user = User::create([
                'name' => $name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'rol_id' => $rol->id,
                'estatus' => 'Activo',
            ]);

            event(new Registered($user));

            Auth::login($user);

            $registro = new Cliente();
            $registro->user_id = $user->id;
            $registro->nombre = $request->nombre;
            $registro->apellido = $request->apellido;
            $registro->rut = $request->rut;
            $registro->direccion = $request->direccion;
            $registro->telefono = $request->telefono;
            $registro->save();

            $idCliente = $registro->id;

            $record = new OrdenCliente();
            $record->cliente_id = $idCliente;
            $record->nro_orden = $nro_orden;
            $record->subtotal = $request->subtotal;
            $record->envio = $request->envio;
            $record->monto = $request->monto;
            $record->tipo_recepcion = $request->checkout_payment_method;
            $record->local = $request->local;
            $record->comuna = $request->comuna;
            $record->nombre_receptor = $request->nombre_receptor;
            $record->correo_receptor = $request->correo_receptor;
            $record->telefono_receptor = $request->telefono_receptor;
            $record->direccion_pedido = $request->direccion_recepcion;
            $record->estatus = 'Por Confirmar';
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

                if ($item->attributes->receta != null) {
                    foreach ($item->attributes->receta as $item => $value) {
                        $ver = OrdenReceta::where('url_receta', $value)->count();
                        if ($ver>0) {
                            $registro =  OrdenReceta::where('url_receta', $value)->first();
                            $registro->orden_id = $idOrden;
                            $registro->save();
                        }
                    }
                }

            }

            $cliente = Cliente::where('id', $idCliente)->first();
            $orden = OrdenCliente::where('id', $idOrden)->first();
            $detalles = DetallesOrden::where('orden_id', $idOrden)->first();

            $email = $cliente->user->email;
            // Envío de correo
            $mailable = new OrdenGenerada($orden, $detalles);
            Mail::to($email)->send($mailable);

        }else{
            if ($request->users === null) {
                $credentials = $request->validate([
                    'email' => ['required','email'],
                    'password' => ['required'],
                ],
                [
                    'email.required' => 'El campo Correo es obligatorio',
                    'email.email' => 'El campo Correo debe tener un formato example@example.com',
                    'password.required' => 'El campo Contraseña es obligatorio',
                ]);


                if (!Auth::attempt($credentials)){
                    throw ValidationException::withMessages([
                        'email' => trans('auth.failed'),
                    ]);
                }
                $request->session()->regenerate();
            }

            if ($request->checkout_payment_method == 'Recetario Magistral') {
                $carritoItems = \Cart::getContent();
                foreach ($carritoItems as $item) {
                    $registro = RegistroCotizacion::where('id_registro', $item->id)->first();
                    $registro->estado = 'Pagado por Cliente';
                    $registro->save();
                }

            }else{
                $nro_orden = rand(5, 15);
                $cliente = Cliente::where('id', Auth::user()->cliente->id)->first();

                $record = new OrdenCliente();
                $record->cliente_id = $cliente->id;
                $record->nro_orden = $nro_orden;
                $record->subtotal = $request->subtotal;
                $record->envio = $request->envio;
                $record->monto = $request->monto;
                $record->tipo_recepcion = $request->checkout_payment_method;
                if ($request->local == 'Seleccione local...') {
                    $record->local = null;
                }else{
                    $record->local = $request->local;
                }
                if ($request->comuna == 'Seleccione Comuna...') {
                    $record->comuna = null;
                }else{
                    $record->comuna = $request->comuna;
                }
                $record->nombre_receptor = $request->nombre_receptor;
                $record->correo_receptor = $request->correo_receptor;
                $record->telefono_receptor = $request->telefono_receptor;
                $record->direccion_pedido = $request->direccion_recepcion;
                $record->estatus = 'Por Confirmar';
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

                    foreach ($item->attributes->receta as $item => $value) {
                        $ver = OrdenReceta::where('url_receta', $value)->count();
                        if ($ver>0) {
                            $registro =  OrdenReceta::where('url_receta', $value)->first();
                            $registro->orden_id = $idOrden;
                            $registro->save();
                        }
                    }
                }

                $cliente = Cliente::where('id', $cliente->id)->first();
                $orden = OrdenCliente::where('id', $idOrden)->first();
                $detalles = DetallesOrden::where('orden_id', $idOrden)->get();

                $email = $cliente->user->email;
                // Envío de correo
                // $mailable = new OrdenGenerada($orden);
                // Mail::to($email)->send($mailable);
            }


        }



        \Cart::clear();

        return redirect('/')->with('success', 'Orden Efectuada Exitosamente');
    }

}
