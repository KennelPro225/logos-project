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
            // "verset_id" => 1,
            "user_id" => 1
        ]);

        Meditation::create([
            "titre" => "Dieu",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aspernatur, nostrum consequuntur quia minus repudiandae tempora neque illo quas cum necessitatibus autem corporis. Sequi rem temporibus recusandae excepturi veniam aut, tempora saepe ullam accusantium, quisquam distinctio fugit molestias est iure reprehenderit omnis iste perferendis? Nostrum aliquid voluptas sint beatae facilis ad, consectetur est ducimus sequi aut minima et facere minus earum dolorum debitis voluptates repellat magni! Alias reprehenderit ipsa, velit, voluptatibus sed laboriosam ex quis autem necessitatibus commodi laborum? Suscipit placeat iure architecto cumque sapiente, nemo distinctio. Ex voluptates esse asperiores veniam perferendis nostrum error sint delectus sed nemo molestias sequi non libero beatae est alias numquam accusamus quo ullam molestiae maiores, perspiciatis dolore amet maxime! Ab laudantium repellat voluptatum, nobis asperiores quisquam omnis velit ad nostrum hic iure eveniet quaerat repellendus veniam non exercitationem cumque officia doloremque! Maxime, dicta, est voluptates sequi rem delectus, natus eum officiis incidunt corporis unde recusandae?
            ",
            // "verset_id" => 1,
            "user_id" => 2
        ]);

        Meditation::create([
            "titre" => "Dieu",
            "texte" => "Je crois en Jésus. Car, il est mon seigneur et sauveur",
            // "verset_id" => 1,
            "user_id" => 1
        ]);

        Meditation::create([
            "titre" => "Dieu",
            "texte" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aspernatur, nostrum consequuntur quia minus repudiandae tempora neque illo quas cum necessitatibus autem corporis. Sequi rem temporibus recusandae excepturi veniam aut, tempora saepe ullam accusantium, quisquam distinctio fugit molestias est iure reprehenderit omnis iste perferendis? Nostrum aliquid voluptas sint beatae facilis ad, consectetur est ducimus sequi aut minima et facere minus earum dolorum debitis voluptates repellat magni! Alias reprehenderit ipsa, velit, voluptatibus sed laboriosam ex quis autem necessitatibus commodi laborum? Suscipit placeat iure architecto cumque sapiente, nemo distinctio. Ex voluptates esse asperiores veniam perferendis nostrum error sint delectus sed nemo molestias sequi non libero beatae est alias numquam accusamus quo ullam molestiae maiores, perspiciatis dolore amet maxime! Ab laudantium repellat voluptatum, nobis asperiores quisquam omnis velit ad nostrum hic iure eveniet quaerat repellendus veniam non exercitationem cumque officia doloremque! Maxime, dicta, est voluptates sequi rem delectus, natus eum officiis incidunt corporis unde recusandae?
            ",
            // "verset_id" => 1,
            "user_id" => 2
        ]);
        Meditation::create([
            "titre" => "Dieu",
            "texte" => "Je crois en Jésus. Car, il est mon seigneur et sauveur",
            // "verset_id" => 1,
            "user_id" => 1
        ]);
    }
}
