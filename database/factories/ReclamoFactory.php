<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReclamoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $user = DB::table('users')->join('rols', 'users.rol_id', '=', 'rols.id')
        //                         ->select('users.id', 'rols.id', 'rols.name')
        //                         ->where('rols.name', 'Cliente')
        //                         ->inRandomOrder()->first();

        return [
            // 'id' => Str::uuid(),
            // 'mensaje' => $this->faker->text(),
            // 'estatus' => 'Activo',
        ];
    }
}
