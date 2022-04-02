<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Anticonceptivos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Medicamentos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Belleza',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Cuidado Personal',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Vitaminas y Suplementos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Veterinaria',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Productos Naturales',
            'estatus' => 'Activo',
        ]);
    }
}
