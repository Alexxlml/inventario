<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::create(['name' => 'Administrador']);
        Perfil::create(['name' => 'Gestor']);
        Perfil::create(['name' => 'Capturista']);
    }
}
