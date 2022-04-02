<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        $this->call(CategoriaSeeder::class);

        $rol = \App\Models\Rol::where('name', 'Developer')->first();

        $user1 = \App\Models\User::create([
            'id' => Str::uuid(),
            'name' => 'Rosanyelis Mendoza',
            'email' => 'rosanyelismendoza@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'remember_token' => Str::random(10),
            'rol_id' => $rol->id,
            'estatus' => 'Activo',
        ]);
        $user2 = \App\Models\User::create([
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
