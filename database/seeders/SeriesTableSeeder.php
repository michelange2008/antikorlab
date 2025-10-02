<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
          [
            'id' => 1,
            'user_id' => 6,
            'anaacte_id' => 13,
            'espece_id' => 2,
            'acheve' => false,
          ],
          [
            'id' => 2,
            'user_id' => 3,
            'anaacte_id' => 8,
            'espece_id' => 3,
            'acheve' => true,
          ],
        ]);
    }
}
