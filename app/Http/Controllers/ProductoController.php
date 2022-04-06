<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\FichaTecnica;
use App\Models\Laboratorio;
use App\Models\Subcategoria;
use App\Models\TipoAdministracion;
use App\Models\FormaFarmaceutica;
use App\Models\CondicionVenta;
use App\Models\ProductoSubcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Producto::where('estatus', 'Activo')->get();
        return view('panel.productos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $laboratorios = Laboratorio::all();
        $subcategorias = Subcategoria::all();
        $tipoadministracion = TipoAdministracion::all();
        $forma_farmaceutica = FormaFarmaceutica::all();
        $condicion_venta = CondicionVenta::all();
        return view('panel.productos.create',
            compact('categorias', 'laboratorios', 'subcategorias',
            'tipoadministracion', 'forma_farmaceutica', 'condicion_venta'));
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
            'sku' => ['required'],
            'informacion' => ['required'],
            'foto' => ['required'],
            'stock' => ['required'],
            'precio_venta' => ['required'],
            'categoria_id' => ['required', 'uuid'],
            'principio_activo' => ['required'],
            'forma_farmaceutica_id' => ['required', 'uuid'],
            'condiciones_almacenamiento' => ['required'],
            'condicion_venta_id' => ['required', 'uuid'],
            'indicaciones' => ['required'],
        ],
        [
            'name.required' => 'El campo Nombre de Producto es obligatorio',
            'sku.required' => 'El campo Código SKU es obligatorio',
            'informacion.required' => 'El campo Información de Producto es obligatorio',
            'foto.required' => 'El campo Foto del Producto es obligatorio',
            'stock.required' => 'El campo Stock es obligatorio',
            'precio_venta.required' => 'El campo Precio de Venta es obligatorio',
            'categoria_id.required' => 'El campo Categoría es obligatorio',
            'categoria_id.uuid' => 'El campo Categoría es obligatorio',
            'forma_farmaceutica_id.required' => 'El campo Forma Farmaceútica es obligatorio',
            'forma_farmaceutica_id.uuid' => 'El campo Forma Farmaceútica es obligatorio',
            'principio_activo.required' => 'El campo Principio Activo es obligatorio',
            'condiciones_almacenamiento.required' => 'El campo Condiciones de Almacenamiento es obligatorio',
            'condicion_venta_id.required' => 'El campo Condición de Venta es obligatorio',
            'condicion_venta_id.uuid' => 'El campo Condición de Venta es obligatorio',
            'indicaciones.required' => 'El campo Indicaciones es obligatorio',

        ]);

        $registro = new Producto();
        $registro->categoria_id = $request->categoria_id;
        $registro->sku = $request->sku;
        $registro->name = $request->name;
        $registro->informacion = $request->informacion;
        if ($request->hasFile('foto')) {
            $uploadPath = public_path('/storage/Productos/');
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $uuid = Str::uuid(4);
            $fileName = $uuid . '.' . $extension;
            $file->move($uploadPath, $fileName);
            $url = asset('/storage/Productos/'.$fileName);
            $registro->foto = $url;
        }
        $registro->stock = $request->stock;
        $registro->precio_venta = $request->precio_venta;
        $registro->estatus = 'Activo';
        $registro->save();

        $id_producto = $registro->id;

        $record = new FichaTecnica();
        $record->producto_id = $id_producto;
        $record->condicion_venta_id = $request->condicion_venta_id;
        $record->forma_farmaceutica_id = $request->forma_farmaceutica_id;
        $record->tipo_administracion_id = $request->tipo_administracion_id;
        $record->laboratorio_id = $request->laboratorio_id;
        $record->dosis_farmaceutica = $request->dosis_farmaceutica;
        $record->principio_activo = $request->principio_activo;
        $record->condiciones_almacenamiento = $request->condiciones_almacenamiento;
        $record->contenido = $request->contenido;
        $record->precio_fraccionario = $request->precio_fraccionario;
        $record->posologia = $request->posologia;
        $record->registro_sanitario = $request->registro_sanitario;
        $record->indicaciones = $request->indicaciones;
        $record->advertencias = $request->advertencias;
        $record->contraindicaciones = $request->contraindicaciones;
        $record->estatus = 'Activo';
        $record->save();

        if ($request->has('subcategorias')) {
            foreach ($request->subcategorias as $subcategoria) {
                $record = new ProductoSubcategoria();
                $record->producto_id =  $id_producto;
                $record->subcategoria_id = $subcategoria;
                $record->save();
            }
        }

        return redirect('admin/productos')->with('success', 'Registro Guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
