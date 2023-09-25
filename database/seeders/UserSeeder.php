<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "nom" => "Yao",
            "prenoms" => "Serge",
            "email" => "yaoserge12@gmail.com",
            "annee_naissance" => Carbon::today(),
            "eglise_id" => 1,
            "baptise_saint_esprit" => false,
            "service" => true,
            "departement_id" => 1,
            "fonction_id" => 1,
            "password" => Hash::make("YaoSerge1234")
        ]);

        User::create([
            "nom" => "Koffi",
            "prenoms" => "Konan",
            "email" => "koffikonan12@gmail.com",
            "annee_naissance" => Carbon::today(),
            "eglise_id" => 1,
            "baptise_saint_esprit" => true,
            "service" => true,
            "departement_id" => 1,
            "fonction_id" => 2,
            "password" => Hash::make("KoffiKonan1234")
        ]);
    }
}
