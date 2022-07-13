<?php

namespace App\Exports;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductoSinInfoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('productos')
                ->join('ficha_tecnicas', 'productos.id', '=', 'ficha_tecnicas.producto_id')
                ->select('productos.name as name', 'productos.informacion as informacion', 'ficha_tecnicas.condiciones_almacenamiento as condiciones_almacenamiento',
                        'ficha_tecnicas.indicaciones as indicaciones', 'ficha_tecnicas.advertencias as advertencias', 'ficha_tecnicas.contraindicaciones as contraindicaciones')
                ->where('productos.informacion', 'sin info')
                ->where('productos.estatus', 'Activo')
                ->get();


    }
}
