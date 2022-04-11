<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tienda\HomeController;
use App\Http\Controllers\Tienda\ProductosController;
use App\Http\Controllers\Tienda\ContactenosController;
use App\Http\Controllers\Tienda\InformacionController;
use App\Http\Controllers\Tienda\ReclamoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Aqui se Manejan las rutas de la tienda online
*/

require __DIR__.'/admin.php';

// Inicio
Route::get('/', [HomeController::class, 'index'])->name('tienda.index');

//Productos Tienda
Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/productos/{id}/buscar-producto', [ProductosController::class, 'buscar']);

// Route::post('/productos/carrito-de-compra', [ProductosController::class, 'store']);
Route::post('/productos/carrito-de-compra', [ProductosController::class, 'addCarrito']);
Route::get('/productos/carrito-de-compra/{id}/checkout', [ProductosController::class, 'show']);


//home
Route::get('/productos/{id}/detalles-producto', [HomeController::class, 'show'])->name('tienda.show');

// COntactanos
Route::get('/contactenos', [ContactenosController::class, 'index']);


Route::get('/terminos-y-condiciones', [InformacionController::class, 'index']);
Route::get('/politicas-de-privacidad-y-proteccion-de-datos', [InformacionController::class, 'show']);


Route::get('/libro-electronico-de-reclamos-y-sugerencias', [ReclamoController::class, 'index']);




