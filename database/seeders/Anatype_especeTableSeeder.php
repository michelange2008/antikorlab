<?php

use Illuminate\Database\Seeder;

class Anatype_especeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anatype_espece')->insert([
// strongles gastrointestinaux - toutes especes
          [
            'anatype_id' => 1,
            'espece_id' => 2,
          ],
          [
            'anatype_id' => 1,
            'espece_id' => 3,
          ],
          [
            'anatype_id' => 1,
            'espece_id' => 5,
          ],
          [
            'anatype_id' => 1,
            'espece_id' => 6,
          ],
          [
            'anatype_id' => 1,
            'espece_id' => 7,
          ],
          [
            'anatype_id' => 1,
            'espece_id' => 8,
          ],

// Strongles gastrointestinaux + petit douve
          [
            'anatype_id' => 2,
            'espece_id' => 2,
          ],
          [
            'anatype_id' => 2,
            'espece_id' => 3,
          ],
          [
            'anatype_id' => 2,
            'espece_id' => 5,
          ],

// Strongles respiratoires ruminants
          [
            'anatype_id' => 3,
            'espece_id' => 2,
          ],
          [
            'anatype_id' => 3,
            'espece_id' => 3,
          ],
          [
            'anatype_id' => 3,
            'espece_id' => 5,
          ],

// Grande douve et paramphistome ruminants

          [
            'anatype_id' => 4,
            'espece_id' => 2,
          ],
          [
            'anatype_id' => 4,
            'espece_id' => 3,
          ],
          [
            'anatype_id' => 4,
            'espece_id' => 5,
          ],

// Haemonchus petits ruminants
          [
            'anatype_id' => 5,
            'espece_id' => 2,
          ],
          [
            'anatype_id' => 5,
            'espece_id' => 3,
          ],

// Resistance toutes especes
          [
            'anatype_id' => 6,
            'espece_id' => 2,
          ],
          [
            'anatype_id' => 6,
            'espece_id' => 3,
          ],
          [
            'anatype_id' => 6,
            'espece_id' => 5,
          ],
          [
            'anatype_id' => 6,
            'espece_id' => 6,
          ],
          [
            'anatype_id' => 6,
            'espece_id' => 7,
          ],
          [
            'anatype_id' => 6,
            'espece_id' => 8,
          ],

        ]);
    }
}
