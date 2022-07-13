<?php

use App\Http\Controllers\Tienda\CarritoController;
use App\Http\Controllers\Tienda\ComprasController;
use App\Http\Controllers\Tienda\ContactenosController;
use App\Http\Controllers\Tienda\HomeController;
use App\Http\Controllers\Tienda\InformacionController;
use App\Http\Controllers\Tienda\LoginController;
use App\Http\Controllers\Tienda\ProductosController;
use App\Http\Controllers\Tienda\ReclamoController;
use Illuminate\Support\Facades\Route;


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

// Login en Tienda
Route::get('/registrarme', [LoginController::class, 'create'])->name('login.create');
Route::post('/guardar-registro', [LoginController::class, 'registrarme'])->name('login.registrarme');
Route::post('/ingresar', [LoginController::class, 'store'])->name('login.store');
Route::post('/salir', [LoginController::class, 'close'])->name('login.close');


//Productos Tienda
Route::get('/productos', [ProductosController::class, 'index'])->name('tienda.productos');
Route::get('/buscar-medicamentos', [ProductosController::class, 'buscarMedicamentos'])->name('tienda.buscarMedicamentos');
Route::get('/productos/{id}/categoria', [ProductosController::class, 'filtrocategoria'])->name('tienda.productoscategoria');
Route::get('/productos/{id}/detalles-producto', [ProductosController::class, 'show'])->name('tienda.show');
Route::get('/productos/{principio_activo}/productos-bioequivalentes', [ProductosController::class, 'bioequivalentes'])->name('tienda.bioequivalentes');



// Carrito de Compras
Route::get('/productos/ver-carrito-de-compras', [CarritoController::class, 'cartList']);
Route::post('/productos/anadir-producto-al-carrito', [CarritoController::class, 'addToCart']);
Route::post('/productos/actualizar-carrito', [CarritoController::class, 'updateCart']);
Route::get('/productos/ver-checkout', [CarritoController::class, 'checkout']);
Route::post('/productos/completar-compra', [CarritoController::class, 'addShop']);
Route::post('/productos/remover-producto-del-carrito', [CarritoController::class, 'removeCart']);
Route::get('/productos/{id}/remover-producto-ajax', [CarritoController::class, 'removeCartAjax']);
Route::post('/productos/remover-todos-los-producto-del-carrito', [CarritoController::class, 'clearAllCart']);
// Route::get('/productos/carrito-de-compra/{id}/checkout', [ProductosController::class, 'show']);


// Contactanos
Route::get('/contactenos', [ContactenosController::class, 'index']);


// Informacion Estatica
Route::get('/quienes-somos', [InformacionController::class, 'quienes']);
Route::get('/terminos-y-condiciones', [InformacionController::class, 'index']);
Route::get('/politicas-de-privacidad-y-proteccion-de-datos', [InformacionController::class, 'show']);
Route::get('/informacion-reglamentaria', [InformacionController::class, 'inforeglam']);
Route::get('/peritorio-minimo-y-carta-de-desabastecimiento', [InformacionController::class, 'peritocart']);
Route::get('/procedimiento-de-devoluciones', [InformacionController::class, 'devoluciones']);



// Reclamos
Route::get('/libro-electronico-de-reclamos-y-sugerencias', [ReclamoController::class, 'index']);
Route::post('/libro-electronico-de-reclamos-y-sugerencias/guardar-comentario', [ReclamoController::class, 'store']);




Route::group(['middleware' => ['auth']], function () {
    //Panel Cliente Usuarios
    Route::get('/mi-perfil', [ComprasController::class, 'index']);
    Route::get('/mi-perfil/{id}/ver-orden', [ComprasController::class, 'showorden']);
    Route::get('/mi-perfil/{id}/ver-reclamo', [ComprasController::class, 'showreclamo']);
    Route::post('/mi-perfil/{id}/responder-reclamo', [ComprasController::class, 'responsereclamo']);
});




