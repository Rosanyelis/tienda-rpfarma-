<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \App\Models\Categoria::where('name', 'Medicamentos')->first();

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Antialérgicos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Antibióticos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Anticonceptivos y Sexualidad',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Antigripales',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Antitusivo',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Antiviral',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Bioequivalentes',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Cardiovásculares',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Dermatológico',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Dolor y Fiebre',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Endocrionología',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Gastrointestinal',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Hipoglucemiantes',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Neurológicos y Tranquilizantes',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Oftamológicos',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Peritorio Mínimo',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Respiratorio',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Vitaminas',
            'estatus' => 'Activo',
        ]);

        $data = \App\Models\Categoria::where('name', 'Anticonceptivos y Sexualidad')->first();

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Anticonceptivos No Orales',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Anticonceptivos Orales',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Lubricantes',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Preservativos',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Cuidado Intimo',
            'estatus' => 'Activo',
        ]);

        $data = \App\Models\Categoria::where('name', 'Belleza Natural')->first();

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Protección Solar',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Perfumes',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Maquillaje',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Manos y Pies',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Cuerpo',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Electro',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Capilar',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Rostro',
            'estatus' => 'Activo',
        ]);

        $data = \App\Models\Categoria::where('name', 'Cuidado Personal')->first();

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Jabones',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Cuidado Bucal',
            'estatus' => 'Activo',
        ]);

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Desodorantes',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Afeitado',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Cuidado Hombre',
            'estatus' => 'Activo',
        ]);
        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Cuidado Mujer',
            'estatus' => 'Activo',
        ]);

        $data = \App\Models\Categoria::where('name', 'Suplementos')->first();

        \App\Models\Subcategoria::create([
            'id' => Str::uuid(),
            'categoria_id' => $data->id,
            'name' => 'Suplementos Alimenticios',
            'estatus' => 'Activo',
        ]);

    }
}
