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
| Aqui se Manejan las rutas del panel administrativo
*/


require __DIR__.'/auth.php';

Route::get('dashboard', function () {
    return view('panel.dashboard');
})->middleware(['auth'])->name('dashboard');



# Categorias
Route::get('admin/configuraciones/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('admin/configuraciones/categorias/crear-categoria', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('admin/configuraciones/categorias/guardar-categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('admin/configuraciones/categorias/{id}/ver-categoria', [CategoriaController::class, 'show'])->name('categoria.show');
Route::get('admin/configuraciones/categorias/{id}/editar-categoria', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('admin/configuraciones/categorias/{id}/actualizar-categoria', [CategoriaController::class, 'update'])->name('categoria.update');
Route::post('admin/configuraciones/categorias/{id}/eliminar-categoria', [CategoriaController::class, 'destroy'])->name('categoria.destroy');


# Empresa
Route::get('admin/configuraciones/empresa', [EmpresaController::class, 'index'])->name('empresa.index');
Route::get('admin/configuraciones/empresa/crear-categoria', [EmpresaController::class, 'create'])->name('empresa.create');
Route::post('admin/configuraciones/empresa/guardar-categoria', [EmpresaController::class, 'store'])->name('empresa.store');
Route::get('admin/configuraciones/empresa/{id}/ver-categoria', [EmpresaController::class, 'show'])->name('empresa.show');
Route::get('admin/configuraciones/empresa/{id}/editar-categoria', [EmpresaController::class, 'edit'])->name('empresa.edit');
Route::put('admin/configuraciones/empresa/{id}/actualizar-categoria', [EmpresaController::class, 'update'])->name('empresa.update');
Route::delete('admin/configuraciones/empresa/{id}/eliminar-categoria', [EmpresaController::class, 'destroy'])->name('empresa.destroy');

# Roles
Route::get('admin/configuraciones/roles', [RolController::class, 'index'])->name('rol.index');
Route::get('admin/configuraciones/roles/crear-rol', [RolController::class, 'create'])->name('rol.create');
Route::post('admin/configuraciones/roles/guardar-rol', [RolController::class, 'store'])->name('rol.store');
Route::get('admin/configuraciones/roles/{id}/ver-rol', [RolController::class, 'show'])->name('rol.show');
Route::get('admin/configuraciones/roles/{id}/editar-rol', [RolController::class, 'edit'])->name('rol.edit');
Route::put('admin/configuraciones/roles/{id}/actualizar-rol', [RolController::class, 'update'])->name('rol.update');
Route::delete('admin/configuraciones/roles/{id}/eliminar-rol', [RolController::class, 'destroy'])->name('rol.destroy');

# Productos
Route::get('admin/productos', [ProductoController::class, 'index'])->name('producto.index');
Route::get('admin/productos/crear-producto', [ProductoController::class, 'create'])->name('producto.create');
Route::post('admin/productos/guardar-producto', [ProductoController::class, 'store'])->name('producto.store');
Route::get('admin/productos/{id}/ver-producto', [ProductoController::class, 'show'])->name('producto.show');
Route::get('admin/productos/{id}/editar-producto', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('admin/productos/{id}/actualizar-producto', [ProductoController::class, 'update'])->name('producto.update');
Route::delete('admin/productos/{id}/eliminar-producto', [ProductoController::class, 'destroy'])->name('producto.destroy');

# Usuarios
Route::get('admin/configuraciones/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('admin/configuraciones/usuarios/crear-usuario', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('admin/configuraciones/usuarios/guardar-usuario', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('admin/configuraciones/usuarios/{id}/ver-usuario', [UsuarioController::class, 'show'])->name('usuario.show');
Route::get('admin/configuraciones/usuarios/{id}/editar-usuario', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('admin/configuraciones/usuarios/{id}/actualizar-usuario', [UsuarioController::class, 'update'])->name('usuario.update');
Route::delete('admin/configuraciones/usuarios/{id}/eliminar-usuario', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
