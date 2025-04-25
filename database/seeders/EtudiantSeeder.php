<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Etudiant::create([
            'nom' => 'Diallo', 'prenom' => 'Fatou',
            'adress' => 'Dakar', 'date_naissance' => '2002-05-15', 'id_class' => 1
        ]);

        Etudiant::create([
             'nom' => 'Fall', 'prenom' => 'Alioune',
            'adress' => 'Thies', 'date_naissance' => '2001-11-03', 'id_class' => 2
        ]);
    }
}
