<?php

use Illuminate\Database\Seeder;

class AnalysesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('analyses')->insert([
          [
            'id' => 1,
            'nom' => "strongles gastro-intestinaux (ovins)",
            'anatype_id' => 1,
            'espece_id' => 2,
            'icone_id' => 9,
          ],
          [
            'id' => 2,
            'nom' => "strongles gastro-intestinaux (bovins)",
            'anatype_id' => 1,
            'espece_id' => 5,
            'icone_id' => 9,
          ],
          [
            'id' => 3,
            'nom' => "strongles gastro-intestinaux (équins)",
            'anatype_id' => 1,
            'espece_id' => 7,
            'icone_id' => 9,
        ],
          [
            'id' => 4,
            'nom' => "strongles respiratoires (ovins)",
            'anatype_id' => 3,
            'espece_id' => 2,
            'icone_id' => 10,
          ],
          [
            'id' => 5,
            'nom' => "strongles respiratoires (bovins)",
            'anatype_id' => 3,
            'espece_id' => 5,
            'icone_id' => 10,
          ],
          [
            'id' => 6,
            'nom' => "pourcentage d'Haemonchus (ovins)",
            'anatype_id' => 5,
            'espece_id' => 2,
            'icone_id' => 15,
          ],
          [
            'id' => 7,
            'nom' => "strongles gastro-intestinaux (caprins)",
            'anatype_id' => 1,
            'espece_id' => 3,
            'icone_id' => 9,
          ],
          [
            'id' => 8,
            'nom' => "strongles respiratoires (caprins)",
            'anatype_id' => 3,
            'espece_id' => 3,
            'icone_id' => 10,
          ],
          [
            'id' => 9,
            'nom' => "pourcentage d'Haemonchus (caprins)",
            'anatype_id' => 5,
            'espece_id' => 3,
            'icone_id' => 15,
          ],
          [
            'id' => 10,
            'nom' => "strongles gastro-intestinaux (ânes)",
            'anatype_id' => 1,
            'espece_id' => 8,
            'icone_id' => 9,
          ],
          [
            'id' => 11,
            'nom' => "strongles gastro-intestinaux (porcs)",
            'anatype_id' => 1,
            'espece_id' => 6,
            'icone_id' => 9,
          ],
          [
            'id' => 12,
            'nom' => "strongles gastro-intestinaux + petite douve (bovins)",
            'anatype_id' => 2,
            'espece_id' => 5,
            'icone_id' => 32,
          ],
          [
            'id' => 13,
            'nom' => "strongles gastro-intestinaux + petite douve (ovins)",
            'anatype_id' => 2,
            'espece_id' => 2,
            'icone_id' => 32,
          ],
          [
            'id' => 14,
            'nom' => "strongles gastro-intestinaux + petite douve (caprins)",
            'anatype_id' => 2,
            'espece_id' => 3,
            'icone_id' => 32,
          ],
          [
            'id' => 15,
            'nom' => "Grande douve et paramphistome (caprins)",
            'anatype_id' => 4,
            'espece_id' => 3,
            'icone_id' => 31,
          ],
          [
            'id' => 16,
            'nom' => "Grande douve et paramphistome (ovins)",
            'anatype_id' => 4,
            'espece_id' => 2,
            'icone_id' => 31,
          ],
          [
            'id' => 17,
            'nom' => "Grande douve et paramphistome (bovins)",
            'anatype_id' => 4,
            'espece_id' => 5,
            'icone_id' => 31,
          ],
          [
            'id' => 18,
            'nom' => "Test de résistances aux vermifuges (ovins)",
            'anatype_id' => 6,
            'espece_id' => 2,
            'icone_id' => 23,
          ],
          [
            'id' => 19,
            'nom' => "Test de résistances aux vermifuges (caprins)",
            'anatype_id' => 6,
            'espece_id' => 3,
            'icone_id' => 23,
          ],
          [
            'id' => 20,
            'nom' => "Test de résistances aux vermifuges (bovins)",
            'anatype_id' => 6,
            'espece_id' => 5,
            'icone_id' => 23,
          ],
          [
            'id' => 21,
            'nom' => "Test de résistances aux vermifuges (porcs)",
            'anatype_id' => 6,
            'espece_id' => 6,
            'icone_id' => 23,
          ],
          [
            'id' => 22,
            'nom' => "Test de résistances aux vermifuges (chevaux)",
            'anatype_id' => 6,
            'espece_id' => 7,
            'icone_id' => 23,
          ],
          [
            'id' => 23,
            'nom' => "Test de résistances aux vermifuges (ânes)",
            'anatype_id' => 6,
            'espece_id' => 8,
            'icone_id' => 23,
          ],
        ]);
    }
}
