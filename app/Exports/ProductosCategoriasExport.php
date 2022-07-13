<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductosCategoriasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('productos')
                ->join('ficha_tecnicas', 'productos.id', '=', 'ficha_tecnicas.producto_id')
                ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
                ->select('productos.name as name',
                        'categorias.name as categoria',
                        'productos.sku as sku',
                        'productos.precio_venta as precio_venta',
                        'productos.informacion as informacion',
                        'productos.estatus as estatus')
                ->where('productos.estatus', 'Activo')
                ->get();

    }
}
