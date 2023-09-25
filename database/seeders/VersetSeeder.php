<?php

namespace Database\Seeders;

use App\Models\Verset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VersetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Verset::create([
            "bible_version" => "LSG",
            "livre" => "jean",
            "chapitre" => 1,
            "debut_verset" => 1
        ]);
    }
}
