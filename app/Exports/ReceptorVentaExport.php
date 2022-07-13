<?php

namespace App\Exports;

use App\Models\OrdenCliente;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReceptorVentaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrdenCliente::select('nombre_receptor', 'comuna', 'direccion_pedido', 'telefono_receptor')->get();
    }
}
