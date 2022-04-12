<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tienda\HomeController;
use App\Http\Controllers\Tienda\ProductosController;
use App\Http\Controllers\Tienda\CarritoController;
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
Route::get('/productos', [ProductosController::class, 'index'])->name('tienda.productos');
Route::get('/productos/{id}/detalles-producto', [HomeController::class, 'show'])->name('tienda.show');


// Carrito de Compras
Route::get('/productos/ver-carrito-de-compras', [CarritoController::class, 'cartList']);
Route::post('/productos/anadir-producto-al-carrito', [CarritoController::class, 'addToCart']);
Route::post('/productos/actualizar-carrito', [CarritoController::class, 'updateCart']);
Route::get('/productos/ver-checkout', [CarritoController::class, 'checkout']);
Route::post('/productos/completar-compra', [CarritoController::class, 'addShop']);
Route::post('/productos/remover-producto-del-carrito', [CarritoController::class, 'removeCart']);
Route::post('/productos/remover-todos-los-producto-del-carrito', [CarritoController::class, 'clearAllCart']);
// Route::get('/productos/carrito-de-compra/{id}/checkout', [ProductosController::class, 'show']);


// Contactanos
Route::get('/contactenos', [ContactenosController::class, 'index']);


// Informacion Estatica
Route::get('/terminos-y-condiciones', [InformacionController::class, 'index']);
Route::get('/politicas-de-privacidad-y-proteccion-de-datos', [InformacionController::class, 'show']);


// Reclamos
Route::get('/libro-electronico-de-reclamos-y-sugerencias', [ReclamoController::class, 'index']);




