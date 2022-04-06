<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FormaFarmaceuticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'No Aplica',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Gotas',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Comprimidos',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Capsulas blandas',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Jarabe',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Crema',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Gel',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Solucion',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Aposito',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Supositorio',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Sobre',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Ampolla',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Spray',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Unguento',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Aceite',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Inhalador',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Parche',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Comp. Masticables',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Capsulas',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Ovulos',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Comprimidos Recubiertos',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Suspensión Oral',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Efervescentes',
            'estatus' => 'Activo',
        ]);
        \App\Models\FormaFarmaceutica::create([
            'id' => Str::uuid(),
            'name' => 'Elixir',
            'estatus' => 'Activo',
        ]);
    }
}
