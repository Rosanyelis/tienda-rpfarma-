<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();

        $rol = \App\Models\Rol::where('name', 'Developer')->first();
        \App\Models\User::create([
            'id' => Str::uuid(),
            'name' => 'Rosanyelis Mendoza',
            'email' => 'rosanyelismendoza@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'remember_token' => Str::random(10),
            'rol_id' => $rol->id,
            'estatus' => 'Activo',
        ]);
        \App\Models\User::create([
            'id' => Str::uuid(),
            'name' => 'Alejandro Venales',
            'email' => 'alejandro2ve@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'remember_token' => Str::random(10),
            'rol_id' => $rol->id,
            'estatus' => 'Activo',
        ]);

    }
}
