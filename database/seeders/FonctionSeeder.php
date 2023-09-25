<?php

namespace Database\Seeders;

use App\Models\Fonction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fonction::create([
            "nom"=>"Pasteur",
        ]);

        Fonction::create([
            "nom"=>"Servant",
        ]);

        Fonction::create([
            "nom"=>"Fidèle",
        ]);
    }
}
