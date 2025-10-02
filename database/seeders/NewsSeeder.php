<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
          [
            'title' => "C'est la mise à l'herbe",
            'content' => "Avec le retour du pâturage, les cycles parasitaires vont reprendre.
              La douceur et l'humidité du printemps favorisent le développement des strongles
              gastro-intestinaux.",
            'conclusion' => "Si vous êtes inquiets sur les niveaux d'infestation parasitaire de vos animaux,
              prévoyez de faire des analyses coproscopiques au mois de mai ou juin.",
            'img' => 'BKZ5hkFuLOw8eJe2Ugw2c15vtHrTZOVcl1ZCTcou.jpg',

          ]
        ]);
    }
}
