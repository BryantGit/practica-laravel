<?php

namespace Database\Seeders;

use App\Models\cursos;
use App\Models\universidades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cursos::create([
            'nombre_curso' => 'Semestral'
        ]);
        Cursos::create([
            'nombre_curso' => 'Anual'
        ]);
        Cursos::create([
            'nombre_curso' => 'Semi Intensivo'
        ]);
    }
}
