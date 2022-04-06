<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TipoAdministracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Oral',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Dérmico',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Intramuscular',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Intravaginal',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Inyectable',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Nasal',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Oftalmica',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Ótico',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Rectal',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Tópica',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Uso Indicado',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'Vaginal',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'id' => Str::uuid(),
            'name' => 'No Indicado',
            'estatus' => 'Activo',
        ]);
    }
}
