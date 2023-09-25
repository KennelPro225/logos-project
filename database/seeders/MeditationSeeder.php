<?php

namespace Database\Seeders;

use App\Models\Meditation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeditationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meditation::create([
            "titre" => "Dieu",
            "texte" => "Je crois en Jésus. Car, il est mon seigneur et sauveur",
            "verset_id" => 1,
            "user_id" => 1
        ]);
    }
}
