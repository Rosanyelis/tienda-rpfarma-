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
            'id' => Str::uuid(),
            'name' => 'Medicamentos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Anticonceptivos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Sexualidad',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Belleza Natural',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Cuidado Personal',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Vitaminas',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Suplementos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Veterinaria',
            'estatus' => 'Activo',
        ]);

        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Bebé e Infantil',
            'estatus' => 'Activo',
        ]);

        \App\Models\Categoria::create([
            'id' => Str::uuid(),
            'name' => 'Insumos Médicos',
            'estatus' => 'Activo',
        ]);



    }
}
