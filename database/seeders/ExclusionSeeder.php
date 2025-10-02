<?php

use Illuminate\Database\Seeder;

class ExclusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exclusions')->delete();

        DB::table('exclusions')->insert([

          [ 'espece_id' => 2, 'age_id' => null, 'anatype_id' => 1, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anatype_id' => 2, 'observation_id' => 28,],
          [ 'espece_id' => 2, 'age_id' => null, 'anatype_id' => 1, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anatype_id' => 2, 'observation_id' => 27,],
          [ 'espece_id' => 2, 'age_id' => null, 'anatype_id' => 4, 'observation_id' => 29,],

          [ 'espece_id' => 3, 'age_id' => null, 'anatype_id' => 1, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anatype_id' => 2, 'observation_id' => 28,],
          [ 'espece_id' => 3, 'age_id' => null, 'anatype_id' => 1, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anatype_id' => 2, 'observation_id' => 27,],
          [ 'espece_id' => 3, 'age_id' => null, 'anatype_id' => 4, 'observation_id' => 29,],

          [ 'espece_id' => 5, 'age_id' => 1, 'anatype_id' => 1, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anatype_id' => 2, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anatype_id' => 1, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anatype_id' => 2, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 1, 'anatype_id' => 4, 'observation_id' => 29,],
          
          [ 'espece_id' => 5, 'age_id' => 2, 'anatype_id' => 1, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anatype_id' => 2, 'observation_id' => 28,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anatype_id' => 1, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anatype_id' => 2, 'observation_id' => 27,],
          [ 'espece_id' => 5, 'age_id' => 2, 'anatype_id' => 4, 'observation_id' => 29,],


        ]);
    }
}
