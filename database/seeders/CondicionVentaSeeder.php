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
            'name' => 'Venta Libre',
            'descripcion' => 'Venta directa',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'name' => 'Sin Receta',
            'descripcion' => 'Venta directa',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'name' => 'Receta',
            'descripcion' => 'Venta con receta médica',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'name' => 'Receta Retenida',
            'descripcion' => 'Venta con receta retenida',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'name' => 'Receta Cheque',
            'descripcion' => 'Venta con receta cheque',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'name' => 'Receta Retenida, Retiro en local',
            'descripcion' => 'Receta Retenida, Retiro en local',
            'estatus' => 'Activo',
        ]);
        \App\Models\CondicionVenta::create([
            'name' => 'Receta Médica, Producto Refrigerado, Retiro en Tienda',
            'descripcion' => 'Receta Médica, Producto Refrigerado, Retiro en Tienda',
            'estatus' => 'Activo',
        ]);
    }
}
