<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\universidades;
class UniversidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Universidades::create([
            'nombre' => 'UNAM'
        ]);
        Universidades::create([
            'nombre' => 'UNAM'
        ]);
        Universidades::create([
            'nombre' => 'IPN'
        ]);
        Universidades::create([
            'nombre' => 'UANL'
        ]);
        Universidades::create([
            'nombre' => 'UDEG'
        ]);
        Universidades::create([
            'nombre' => 'UAPSLP'
        ]);
    }
}
