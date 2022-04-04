<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tienda\HomeController;
use App\Http\Controllers\Tienda\ProductosController;
use App\Http\Controllers\Tienda\ContactenosController;


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
Route::get('/productos/{id}/detalles-producto', [HomeController::class, 'show'])->name('tienda.show');


// COntactanos
Route::get('/contactenos', [ContactenosController::class, 'index']);
// Route::get('/', function () {
//     return view('tienda.home');
// });
;



