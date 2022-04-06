<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'No Aplica',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Eurofarma',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Gador',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Sanitas',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Bayer',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Chile',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Pasteur',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Silesia',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Medipharm S.A.',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorios Kampar S.A',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Valma',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio D&M Pharma',
            'estatus' => 'Activo',
        ]);
    }
}
