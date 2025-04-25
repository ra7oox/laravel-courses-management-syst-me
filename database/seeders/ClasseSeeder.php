<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Classe::create(['libelle' => 'Dev1', 'id_formation' => 1, 'nombre_max' => 30]);
        Classe::create(['libelle' => 'Reseau1', 'id_formation' => 2, 'nombre_max' => 25]);
    }
}
