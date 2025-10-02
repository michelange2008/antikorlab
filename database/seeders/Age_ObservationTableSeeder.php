<?php

use Illuminate\Database\Seeder;

class Age_ObservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('age_observation')->delete();

        DB::table('age_observation')->insert([

          ['age_id' => 1, 'observation_id' => 2],
          ['age_id' => 1, 'observation_id' => 5],
          ['age_id' => 1, 'observation_id' => 6],
          ['age_id' => 1, 'observation_id' => 7],
          ['age_id' => 1, 'observation_id' => 8],
          ['age_id' => 1, 'observation_id' => 12],
          ['age_id' => 1, 'observation_id' => 13],
          ['age_id' => 1, 'observation_id' => 16],
          ['age_id' => 1, 'observation_id' => 18],
          ['age_id' => 1, 'observation_id' => 19],
          ['age_id' => 1, 'observation_id' => 21],
          ['age_id' => 1, 'observation_id' => 23],
          ['age_id' => 1, 'observation_id' => 27],
          ['age_id' => 1, 'observation_id' => 28],
          ['age_id' => 1, 'observation_id' => 29],
          ['age_id' => 2, 'observation_id' => 1],
          ['age_id' => 2, 'observation_id' => 5],
          ['age_id' => 2, 'observation_id' => 6],
          ['age_id' => 2, 'observation_id' => 7],
          ['age_id' => 2, 'observation_id' => 8],
          ['age_id' => 2, 'observation_id' => 12],
          ['age_id' => 2, 'observation_id' => 13],
          ['age_id' => 2, 'observation_id' => 16],
          ['age_id' => 2, 'observation_id' => 18],
          ['age_id' => 2, 'observation_id' => 19],
          ['age_id' => 2, 'observation_id' => 21],
          ['age_id' => 2, 'observation_id' => 23],
          ['age_id' => 2, 'observation_id' => 27],
        ]);
    }
}
