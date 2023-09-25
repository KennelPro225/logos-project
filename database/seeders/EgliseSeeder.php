<?php

namespace Database\Seeders;

use App\Models\Eglise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EgliseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eglise::create([
            "nom" => "Vase d'honneur",
            "assemblee" => "Vie glorieuse",
            "commune" => "Cocody"
        ]);
    }
}
