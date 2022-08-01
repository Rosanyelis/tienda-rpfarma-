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
            'name' => 'Oral',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Dérmico',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Intramuscular',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Intravaginal',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Inyectable',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Nasal',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Oftalmica',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Ótico',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Rectal',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Tópica',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Uso Indicado',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'Vaginal',
            'estatus' => 'Activo',
        ]);
        \App\Models\TipoAdministracion::create([
            'name' => 'No Indicado',
            'estatus' => 'Activo',
        ]);
    }
}
