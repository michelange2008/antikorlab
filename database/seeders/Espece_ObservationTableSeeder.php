<?php

use Illuminate\Database\Seeder;

class Espece_ObservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      DB::table('espece_observation')->truncate();

        DB::table('espece_observation')->insert([
          [ "espece_id" => 2, "observation_id" => 1],
          [ "espece_id" => 2, "observation_id" => 2],
          [ "espece_id" => 2, "observation_id" => 3],
          [ "espece_id" => 2, "observation_id" => 4],
          [ "espece_id" => 2, "observation_id" => 6],
          [ "espece_id" => 2, "observation_id" => 7],
          [ "espece_id" => 2, "observation_id" => 8],
          [ "espece_id" => 2, "observation_id" => 33],
          [ "espece_id" => 2, "observation_id" => 10],
          [ "espece_id" => 2, "observation_id" => 11],
          [ "espece_id" => 2, "observation_id" => 12],
          [ "espece_id" => 2, "observation_id" => 13],
          [ "espece_id" => 2, "observation_id" => 14],
          [ "espece_id" => 2, "observation_id" => 15],
          [ "espece_id" => 2, "observation_id" => 18],
          [ "espece_id" => 2, "observation_id" => 19],
          [ "espece_id" => 2, "observation_id" => 20 ],
          [ "espece_id" => 2, "observation_id" => 21 ],
          [ "espece_id" => 2, "observation_id" => 23 ],
          [ "espece_id" => 2, "observation_id" => 24 ],
          [ "espece_id" => 2, "observation_id" => 25 ],
          [ "espece_id" => 2, "observation_id" => 26 ],
          [ "espece_id" => 2, "observation_id" => 27 ],
          [ "espece_id" => 2, "observation_id" => 28 ],
          [ "espece_id" => 2, "observation_id" => 29 ],
          [ "espece_id" => 2, "observation_id" => 30 ],
          [ "espece_id" => 2, "observation_id" => 34 ],
          [ "espece_id" => 2, "observation_id" => 37 ],
          [ "espece_id" => 3, "observation_id" => 1 ],
          [ "espece_id" => 3, "observation_id" => 2 ],
          [ "espece_id" => 3, "observation_id" => 5 ],
          [ "espece_id" => 3, "observation_id" => 6 ],
          [ "espece_id" => 3, "observation_id" => 7 ],
          [ "espece_id" => 3, "observation_id" => 33 ],
          [ "espece_id" => 3, "observation_id" => 10 ],
          [ "espece_id" => 3, "observation_id" => 11 ],
          [ "espece_id" => 3, "observation_id" => 12 ],
          [ "espece_id" => 3, "observation_id" => 13 ],
          [ "espece_id" => 3, "observation_id" => 14 ],
          [ "espece_id" => 3, "observation_id" => 16 ],
          [ "espece_id" => 3, "observation_id" => 18 ],
          [ "espece_id" => 3, "observation_id" => 19 ],
          [ "espece_id" => 3, "observation_id" => 21 ],
          [ "espece_id" => 3, "observation_id" => 22 ],
          [ "espece_id" => 3, "observation_id" => 24 ],
          [ "espece_id" => 3, "observation_id" => 25 ],
          [ "espece_id" => 3, "observation_id" => 26 ],
          [ "espece_id" => 3, "observation_id" => 27 ],
          [ "espece_id" => 3, "observation_id" => 28 ],
          [ "espece_id" => 3, "observation_id" => 29 ],
          [ "espece_id" => 3, "observation_id" => 34 ],
          [ "espece_id" => 3, "observation_id" => 37 ],
          [ "espece_id" => 6, "observation_id" => 1 ],
          [ "espece_id" => 6, "observation_id" => 2 ],
          [ "espece_id" => 6, "observation_id" => 6 ],
          [ "espece_id" => 6, "observation_id" => 7 ],
          [ "espece_id" => 6, "observation_id" => 32 ],
          [ "espece_id" => 6, "observation_id" => 12 ],
          [ "espece_id" => 6, "observation_id" => 13 ],
          [ "espece_id" => 6, "observation_id" => 21 ],
          [ "espece_id" => 6, "observation_id" => 23 ],
          [ "espece_id" => 6, "observation_id" => 34 ],
          [ "espece_id" => 7, "observation_id" => 1 ],
          [ "espece_id" => 7, "observation_id" => 5 ],
          [ "espece_id" => 7, "observation_id" => 6 ],
          [ "espece_id" => 7, "observation_id" => 12 ],
          [ "espece_id" => 7, "observation_id" => 13 ],
          [ "espece_id" => 7, "observation_id" => 17 ],
//############################################################
          // [ "espece_id" => 7, "observation_id" => 19 ],
          [ "espece_id" => 7, "observation_id" => 36 ],
//##############################################################
          [ "espece_id" => 7, "observation_id" => 22 ],
          [ "espece_id" => 7, "observation_id" => 35 ],
          [ "espece_id" => 8, "observation_id" => 1 ],
          [ "espece_id" => 8, "observation_id" => 5 ],
          [ "espece_id" => 8, "observation_id" => 6 ],
          [ "espece_id" => 8, "observation_id" => 12 ],
          [ "espece_id" => 8, "observation_id" => 13 ],
          [ "espece_id" => 8, "observation_id" => 17 ],
          // [ "espece_id" => 8, "observation_id" => 19 ],
          [ "espece_id" => 8, "observation_id" => 36 ],
          [ "espece_id" => 8, "observation_id" => 22 ],
          [ "espece_id" => 8, "observation_id" => 35 ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
