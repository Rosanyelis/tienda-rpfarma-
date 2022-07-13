<?php

namespace App\Http\Controllers;

use App\Exports\ProductosCategoriasExport;
use App\Exports\ProductoSinInfoExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportesController extends Controller
{
    public function index()
    {
        return view('panel.reportes.index');
    }
    public function export()
    {
        return Excel::download(new ProductoSinInfoExport, 'productos-sin-informacion.xlsx');
    }
    public function exportProductosAll()
    {
        return Excel::download(new ProductosCategoriasExport, 'productos-tienda.xlsx');
    }
}
