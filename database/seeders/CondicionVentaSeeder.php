<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CondicionVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CondicionVenta::create([
            'id' => Str::uuid(),
            'name' => 'Venta Libre',
            'descripcion' => 'Venta directa',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'id' => Str::uuid(),
            'name' => 'Sin Receta',
            'descripcion' => 'Venta directa',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'id' => Str::uuid(),
            'name' => 'Receta',
            'descripcion' => 'Venta con receta médica',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'id' => Str::uuid(),
            'name' => 'Receta Retenida',
            'descripcion' => 'Venta con receta retenida',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'id' => Str::uuid(),
            'name' => 'Receta Retenida y Control de Stock',
            'descripcion' => 'Venta con control de stock',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'id' => Str::uuid(),
            'name' => 'Receta Cheque',
            'descripcion' => 'Venta con receta cheque',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'id' => Str::uuid(),
            'name' => 'Sin Información',
            'descripcion' => 'Sin informacion',
            'estatus' => 'Activo',
        ]);
    }
}
