<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CondicionVentaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FormaFarmaceuticaController;
use App\Http\Controllers\LaboratorioController;
// use App\Http\Controllers\LinkController;
use App\Http\Controllers\OrdenesController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RecetasMagistralesController;
use App\Http\Controllers\RecetasMagistralesDomicilioController;
use App\Http\Controllers\ReclamosSugerenciaController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipoAdministracionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentasController;
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
| Aqui se Manejan las rutas del panel administrativo
*/


require __DIR__.'/auth.php';

Route::get('dashboard', function () {
    return view('panel.dashboard');
})->middleware(['auth', 'checkAdmin'])->name('dashboard');

Route::group(['middleware' => ['auth', 'checkAdmin']], function () {
    # Ordenes
    Route::get('admin/ordenes', [OrdenesController::class, 'index'])->name('orden.index');
    Route::get('admin/ordenes/{id}/ver-orden', [OrdenesController::class, 'show'])->name('orden.show');
    Route::get('admin/ordenes/{id}/aprobar-orden', [OrdenesController::class, 'aprueba'])->name('orden.aprueba');
    Route::get('admin/ordenes/{id}/motivo-de-rechazo', [OrdenesController::class, 'create'])->name('orden.create');
    Route::post('admin/ordenes/{id}/rechazo-orden', [OrdenesController::class, 'rechazo'])->name('orden.rechazo');
    # Ordenes
    Route::get('admin/ventas', [VentasController::class, 'index'])->name('venta.index');
    Route::get('admin/ventas/export', [VentasController::class, 'export'])->name('venta.export');
    Route::get('admin/ventas/exportar-datos-de-receptor-de-compras', [VentasController::class, 'exportarReceptores'])->name('venta.exportReceptores');

    #Reportes
    Route::get('admin/reportes', [ReportesController::class, 'index'])->name('reportes.index');
    Route::get('admin/reportes/exportar-productos-sin-info', [ReportesController::class, 'export'])->name('reportes.export');
    Route::get('admin/reportes/exportar-productos-todos', [ReportesController::class, 'exportProductosAll'])->name('reportes.exportProductosAll');

    # Reclamos y Sugerencias
    Route::get('admin/reclamos-y-sugerencias', [ReclamosSugerenciaController::class, 'index'])->name('reclamo.index');
    Route::get('admin/reclamos-y-sugerencias/{id}/responder-reclamo-y-sugerencia', [ReclamosSugerenciaController::class, 'edit'])->name('reclamo.edit');
    Route::post('admin/reclamos-y-sugerencias/{id}/enviar-respuesta', [ReclamosSugerenciaController::class, 'update'])->name('reclamo.update');
    Route::get('admin/reclamos-y-sugerencias/{id}/cierre-de-reclamo', [ReclamosSugerenciaController::class, 'destroy'])->name('reclamo.destroy');

    # Recetas Magistrales
    Route::get('admin/recetas-magistrales', [RecetasMagistralesController::class, 'index'])->name('recetas.index');
    Route::get('admin/recetas-magistrales/{id}/ver-solicitud', [RecetasMagistralesController::class, 'edit'])->name('recetas.edit');
    Route::post('admin/recetas-magistrales/{id}/responder-solicitud', [RecetasMagistralesController::class, 'update'])->name('recetas.update');

    # Recetas Magistrales a Domicilio
    Route::get('admin/recetas-a-domicilio', [RecetasMagistralesDomicilioController::class, 'index'])->name('recetas.index');
    Route::get('admin/recetas-a-domicilio/{id}/ver-receta', [RecetasMagistralesDomicilioController::class, 'edit'])->name('recetas.edit');
    Route::post('admin/recetas-a-domicilio/{id}/actualizar-temperatura', [RecetasMagistralesDomicilioController::class, 'update'])->name('recetas.update');

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
    Route::post('admin/configuraciones/empresa/{id}/eliminar-categoria', [EmpresaController::class, 'destroy'])->name('empresa.destroy');

    # Roles
    Route::get('admin/configuraciones/roles', [RolController::class, 'index'])->name('rol.index');
    Route::get('admin/configuraciones/roles/crear-rol', [RolController::class, 'create'])->name('rol.create');
    Route::post('admin/configuraciones/roles/guardar-rol', [RolController::class, 'store'])->name('rol.store');
    Route::get('admin/configuraciones/roles/{id}/ver-rol', [RolController::class, 'show'])->name('rol.show');
    Route::get('admin/configuraciones/roles/{id}/editar-rol', [RolController::class, 'edit'])->name('rol.edit');
    Route::put('admin/configuraciones/roles/{id}/actualizar-rol', [RolController::class, 'update'])->name('rol.update');
    Route::post('admin/configuraciones/roles/{id}/eliminar-rol', [RolController::class, 'destroy'])->name('rol.destroy');

    # Productos
    Route::get('admin/productos', [ProductoController::class, 'index'])->name('producto.index');
    Route::get('admin/productos/crear-producto', [ProductoController::class, 'create'])->name('producto.create');
    Route::post('admin/productos/guardar-producto', [ProductoController::class, 'store'])->name('producto.store');
    Route::get('admin/productos/{id}/ver-producto', [ProductoController::class, 'show'])->name('producto.show');
    Route::get('admin/productos/{id}/editar-producto', [ProductoController::class, 'edit'])->name('producto.edit');
    Route::put('admin/productos/{id}/actualizar-producto', [ProductoController::class, 'update'])->name('producto.update');
    Route::post('admin/productos/{id}/eliminar-producto', [ProductoController::class, 'destroy'])->name('producto.destroy');

    # Usuarios
    Route::get('admin/configuraciones/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');
    Route::get('admin/configuraciones/usuarios/crear-usuario', [UsuarioController::class, 'create'])->name('usuario.create');
    Route::post('admin/configuraciones/usuarios/guardar-usuario', [UsuarioController::class, 'store'])->name('usuario.store');
    Route::get('admin/configuraciones/usuarios/{id}/ver-usuario', [UsuarioController::class, 'show'])->name('usuario.show');
    Route::get('admin/configuraciones/usuarios/{id}/editar-usuario', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::put('admin/configuraciones/usuarios/{id}/actualizar-usuario', [UsuarioController::class, 'update'])->name('usuario.update');
    Route::post('admin/configuraciones/usuarios/{id}/eliminar-usuario', [UsuarioController::class, 'destroy'])->name('usuario.destroy');

    # Laboratorio
    Route::get('admin/configuraciones/laboratorio', [LaboratorioController::class, 'index'])->name('laboratorio.index');
    Route::get('admin/configuraciones/laboratorio/crear-laboratorio', [LaboratorioController::class, 'create'])->name('laboratorio.create');
    Route::post('admin/configuraciones/laboratorio/guardar-laboratorio', [LaboratorioController::class, 'store'])->name('laboratorio.store');
    Route::get('admin/configuraciones/laboratorio/{id}/ver-laboratorio', [Laboratorio::class, 'show'])->name('laboratorio.show');
    Route::get('admin/configuraciones/laboratorio/{id}/editar-laboratorio', [LaboratorioController::class, 'edit'])->name('laboratorio.edit');
    Route::put('admin/configuraciones/laboratorio/{id}/actualizar-laboratorio', [LaboratorioController::class, 'update'])->name('laboratorio.update');
    Route::post('admin/configuraciones/laboratorio/{id}/eliminar-laboratorio', [LaboratorioController::class, 'destroy'])->name('laboratorio.destroy');

    # Formas Farmaceuas
    Route::get('admin/configuraciones/formas-farmaceuticas', [FormaFarmaceuticaController::class, 'index'])->name('formasfarmaceuticas.index');
    Route::get('admin/configuraciones/formas-farmaceuticas/crear-formas-farmaceuticas', [FormaFarmaceuticaController::class, 'create'])->name('formasfarmaceuticas.create');
    Route::post('admin/configuraciones/formas-farmaceuticas/guardar-formas-farmaceuticas', [FormaFarmaceuticaController::class, 'store'])->name('formasfarmaceuticas.store');
    Route::get('admin/configuraciones/formas-farmaceuticas/{id}/ver-formas-farmaceuticas', [FormaFarmaceutica::class, 'show'])->name('formasfarmaceuticas.show');
    Route::get('admin/configuraciones/formas-farmaceuticas/{id}/editar-formas-farmaceuticas', [FormaFarmaceuticaController::class, 'edit'])->name('formasfarmaceuticas.edit');
    Route::put('admin/configuraciones/formas-farmaceuticas/{id}/actualizar-formas-farmaceuticas', [FormaFarmaceuticaController::class, 'update'])->name('formasfarmaceuticas.update');
    Route::post('admin/configuraciones/formas-farmaceuticas/{id}/eliminar-formas-farmaceuticas', [FormaFarmaceuticaController::class, 'destroy'])->name('formasfarmaceuticas.destroy');

    # Condiciones de ventas
    Route::get('admin/configuraciones/condiciones-venta', [CondicionVentaController::class, 'index'])->name('condicionesventa.index');
    Route::get('admin/configuraciones/condiciones-venta/crear-condiciones-venta', [CondicionVentaController::class, 'create'])->name('condicionesventa.create');
    Route::post('admin/configuraciones/condiciones-venta/guardar-condiciones-venta', [CondicionVentaController::class, 'store'])->name('condicionesventa.store');
    Route::get('admin/configuraciones/condiciones-venta/{id}/ver-condiciones-venta', [CondicionVentaController::class, 'show'])->name('condicionesventa.show');
    Route::get('admin/configuraciones/condiciones-venta/{id}/editar-condiciones-venta', [CondicionVentaController::class, 'edit'])->name('condicionesventa.edit');
    Route::put('admin/configuraciones/condiciones-venta/{id}/actualizar-condiciones-venta', [CondicionVentaController::class, 'update'])->name('condicionesventa.update');
    Route::post('admin/configuraciones/condiciones-venta/{id}/eliminar-condiciones-venta', [CondicionVentaController::class, 'destroy'])->name('condicionesventa.destroy');


    # Tipo de administracion

    Route::get('admin/configuraciones/tipos-administracion', [TipoAdministracionController::class, 'index'])->name('tiposadministracion.index');
    Route::get('admin/configuraciones/tipos-administracion/crear-tipos-administracion', [TipoAdministracionController::class, 'create'])->name('tiposadministracion.create');
    Route::post('admin/configuraciones/tipos-administracion/guardar-tipos-administracion', [TipoAdministracionController::class, 'store'])->name('tiposadministracion.store');
    Route::get('admin/configuraciones/tipos-administracion/{id}/ver-tipos-administracion', [TipoAdministracionController::class, 'show'])->name('tiposadministracion.show');
    Route::get('admin/configuraciones/tipos-administracion/{id}/editar-tipos-administracion', [TipoAdministracionController::class, 'edit'])->name('tiposadministracion.edit');
    Route::put('admin/configuraciones/tipos-administracion/{id}/actualizar-tipos-administracion', [TipoAdministracionController::class, 'update'])->name('tiposadministracion.update');
    Route::post('admin/configuraciones/tipos-administracion/{id}/eliminar-tipos-administracion', [TipoAdministracionController::class, 'destroy'])->name('tiposadministracion.destroy');



});
