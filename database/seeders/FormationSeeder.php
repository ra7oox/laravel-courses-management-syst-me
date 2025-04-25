<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Formation::create(['Titre' => 'Développement Web', 'NbreHeure' => 300]);
        Formation::create(['Titre' => 'Réseaux Informatiques', 'NbreHeure' => 280]);
        Formation::create(['Titre' => 'Design Graphique', 'NbreHeure' => 200]);
    }
}
