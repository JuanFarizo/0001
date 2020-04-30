<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'primerCategoria'
        ]);
        Categoria::create([
            'nombre' => 'segundaCategoria'
        ]);
        Categoria::create([
            'nombre' => 'tercerCategoria'
        ]);
    }
}
