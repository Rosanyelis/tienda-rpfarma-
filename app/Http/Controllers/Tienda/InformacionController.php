<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class InformacionController extends Controller
{
    public function index()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.informacion.terminosycondiciones', compact('carritoItems'));
    }

    public function create()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.reclamos.index', compact('carritoItems'));
    }

    public function show()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.informacion.politicasprivacidad', compact('carritoItems'));
    }

    public function quienes()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.informacion.quienessomos', compact('carritoItems'));
    }
    public function inforeglam()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.informacion.informacionreglamentaria', compact('carritoItems'));
    }
    public function peritocart()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.informacion.peritocart', compact('carritoItems'));
    }
    public function devoluciones()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.informacion.procedimientodevo', compact('carritoItems'));
    }
}
