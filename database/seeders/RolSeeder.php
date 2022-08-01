<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rol::create([
            'name' => 'Developer',
            'descripcion' => 'Desarrollador del software.',
            'estatus' => 'Activo',
        ]);
        \App\Models\Rol::create([
            'name' => 'Cliente',
            'descripcion' => 'Usuarios que compran en la tienda.',
            'estatus' => 'Activo',
        ]);
        \App\Models\Rol::create([
            'name' => 'Químico Evaluador',
            'descripcion' => 'Profesional químico que se encarga de evaluar las recetas suministradas por el cliente al comprar un medicamento.',
            'estatus' => 'Activo',
        ]);
        \App\Models\Rol::create([
            'name' => 'Soporte',
            'descripcion' => 'Se encarga de revisar los reclamos de los clientes.',
            'estatus' => 'Activo',
        ]);
        \App\Models\Rol::create([
            'name' => 'Administrador',
            'descripcion' => 'Se encarga de administrar los productos y mas de la tienda.',
            'estatus' => 'Activo',
        ]);
    }
}
