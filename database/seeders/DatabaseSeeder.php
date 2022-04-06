<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RolSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(SubcategoriaSeeder::class);
        $this->call(FormaFarmaceuticaSeeder::class);
        $this->call(TipoAdministracionSeeder::class);
        $this->call(CondicionVentaSeeder::class);
        $this->call(LaboratorioSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(ReclamoSeeder::class);

    }
}
