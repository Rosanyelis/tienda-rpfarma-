<?php

namespace App\Exports;

use App\Models\OrdenCliente;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class VentasExport implements FromView
{
    public function view(): View
    {
        return view('exports.ventas', [
            'ventas' => OrdenCliente::all()
        ]);
    }
}
