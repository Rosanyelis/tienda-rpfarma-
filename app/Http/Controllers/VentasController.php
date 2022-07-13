<?php

namespace App\Http\Controllers;

use App\Exports\ReceptorVentaExport;
use App\Exports\VentasExport;
use App\Models\OrdenCliente;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class VentasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = OrdenCliente::orderBy('created_at', 'desc')->get();
        return view('panel.ventas.index', compact('data'));
    }

    public function export()
    {
        return Excel::download(new VentasExport, 'ventas-de-la-tienda.xlsx');
    }

    public function exportarReceptores()
    {
        return Excel::download(new ReceptorVentaExport, 'datos-de-clientes-receptores-de-compras.csv');
    }
}
