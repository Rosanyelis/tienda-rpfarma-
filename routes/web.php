<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('tienda.home');
});

Route::get('/detalles-producto', function () {
    return view('tienda.producto.fichaproducto');
});

Route::get('/dashboard', function () {
    return view('panel.dashboard');
})->middleware(['auth'])->name('dashboard');


# Categorias
Route::get('/configuraciones/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/configuraciones/categorias/crear-categoria', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/configuraciones/categorias/guardar-categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/configuraciones/categorias/{id}/ver-categoria', [CategoriaController::class, 'show'])->name('categoria.show');
Route::get('/configuraciones/categorias/{id}/editar-categoria', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/configuraciones/categorias/{id}/actualizar-categoria', [CategoriaController::class, 'update'])->name('categoria.update');
Route::delete('/configuraciones/categorias/{id}/eliminar-categoria', [CategoriaController::class, 'destroy'])->name('categoria.destroy');


# Empresa
Route::get('/configuraciones/empresa', [EmpresaController::class, 'index'])->name('empresa.index');
Route::get('/configuraciones/empresa/crear-categoria', [EmpresaController::class, 'create'])->name('empresa.create');
Route::post('/configuraciones/empresa/guardar-categoria', [EmpresaController::class, 'store'])->name('empresa.store');
Route::get('/configuraciones/empresa/{id}/ver-categoria', [EmpresaController::class, 'show'])->name('empresa.show');
Route::get('/configuraciones/empresa/{id}/editar-categoria', [EmpresaController::class, 'edit'])->name('empresa.edit');
Route::put('/configuraciones/empresa/{id}/actualizar-categoria', [EmpresaController::class, 'update'])->name('empresa.update');
Route::delete('/configuraciones/empresa/{id}/eliminar-categoria', [EmpresaController::class, 'destroy'])->name('empresa.destroy');

# Roles
Route::get('/configuraciones/roles', [RolController::class, 'index'])->name('rol.index');
Route::get('/configuraciones/roles/crear-rol', [RolController::class, 'create'])->name('rol.create');
Route::post('/configuraciones/roles/guardar-rol', [RolController::class, 'store'])->name('rol.store');
Route::get('/configuraciones/roles/{id}/ver-rol', [RolController::class, 'show'])->name('rol.show');
Route::get('/configuraciones/roles/{id}/editar-rol', [RolController::class, 'edit'])->name('rol.edit');
Route::put('/configuraciones/roles/{id}/actualizar-rol', [RolController::class, 'update'])->name('rol.update');
Route::delete('/configuraciones/roles/{id}/eliminar-rol', [RolController::class, 'destroy'])->name('rol.destroy');

# Productos
Route::get('/productos', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/productos/crear-producto', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/productos/guardar-producto', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/productos/{id}/ver-producto', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/productos/{id}/editar-producto', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/productos/{id}/actualizar-producto', [ProductoController::class, 'update'])->name('producto.update');
Route::delete('/productos/{id}/eliminar-producto', [ProductoController::class, 'destroy'])->name('producto.destroy');

# Usuarios
Route::get('/configuraciones/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/configuraciones/usuarios/crear-usuario', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/configuraciones/usuarios/guardar-usuario', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/configuraciones/usuarios/{id}/ver-usuario', [UsuarioController::class, 'show'])->name('usuario.show');
Route::get('/configuraciones/usuarios/{id}/editar-usuario', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('/configuraciones/usuarios/{id}/actualizar-usuario', [UsuarioController::class, 'update'])->name('usuario.update');
Route::delete('/configuraciones/usuarios/{id}/eliminar-usuario', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
