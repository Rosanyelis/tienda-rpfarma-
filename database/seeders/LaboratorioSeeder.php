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
            'name' => 'Laboratorio Eurofarma',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Gador',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Sanitas',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Bayer',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Chile',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Pasteur',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Silesia',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Medipharm S.A.',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Kampar S.A',
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
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Abbot',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Ascend',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Andromaco',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Bago',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Biosano',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Boehringer',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Droguería Hofmann',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Farmoquímica',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Galenicum',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Maver',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Labomed',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio MINTLAB',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio OPKO',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Pzifer',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Pharmatrade',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Pharma Investi',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Prater',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Rider',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Sanofi',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Saval',
            'estatus' => 'Activo',
        ]);
        \App\Models\Laboratorio::create([
            'id' => Str::uuid(),
            'name' => 'Laboratorio Tecnofarma',
            'estatus' => 'Activo',
        ]);
    }
}
