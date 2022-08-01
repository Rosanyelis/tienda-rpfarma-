<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'name' => 'Anticonceptivos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Bebé e Infantil',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Belleza Natural',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Medicamentos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Cuidado Personal',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Insumos Médicos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Medicamentos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Recetario Magistral',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Sexualidad',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Suplementos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Veterinaria',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'name' => 'Vitaminas',
            'estatus' => 'Activo',
        ]);

    }
}
