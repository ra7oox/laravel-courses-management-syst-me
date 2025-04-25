<?php

namespace Database\Seeders;

use App\Models\Avis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Avis::create(['id_E' => 1, 'id_F' => 1, 'points' => 15]);
        Avis::create(['id_E' => 1, 'id_F' => 2, 'points' => 12]);
        Avis::create(['id_E' => 2, 'id_F' => 2, 'points' => 16]);
    }
}
