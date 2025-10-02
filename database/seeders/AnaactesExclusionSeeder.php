<?php

use Illuminate\Database\Seeder;

class AnaactesExclusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anaactes_exclusions')->delete();

        DB::table('anaactes_exclusions')->insert([

          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 5, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 6, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 7, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 8, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 16, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 1, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 2, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 3, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 4, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 15, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 5, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 6, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 7, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 8, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 16, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 1, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 2, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 3, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 4, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 15, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anaacte_id' => 11, 'observation_id' => 29,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 5, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 6, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 7, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 8, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 16, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 1, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 2, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 3, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 4, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 15, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 5, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 6, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 7, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 8, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 16, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 1, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 2, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 3, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 4, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 15, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anaacte_id' => 11, 'observation_id' => 29,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 5, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 6, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 7, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 8, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 16, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 1, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 2, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 3, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 4, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 15, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 5, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 6, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 7, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 8, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 16, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 1, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 2, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 3, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 4, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 15, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anaacte_id' => 11, 'observation_id' => 29,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 5, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 6, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 7, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 8, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 16, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 5, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 6, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 7, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 8, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 16, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anaacte_id' => 11, 'observation_id' => 29,],


        ]);
    }
}
