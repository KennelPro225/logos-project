<?php

namespace Database\Seeders;

use App\Models\Dislike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DislikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dislike::create([
            "user_id"=>2,
            "meditation_id"=>1
        ]);
    }
}
