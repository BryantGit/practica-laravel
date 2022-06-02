<?php

namespace Database\Seeders;

use App\Models\Producto;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = Producto::Create([
            'nombre' => 'Coca cola',
            'descripcion' => 'Bebida de los dioses',
            'f_caducidad' => now()
        ]);
    }
}
