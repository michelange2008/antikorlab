<?php

use Illuminate\Database\Seeder;

class Age_AnatypeTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('age_anatype')->delete();

    DB::table('age_anatype')->insert([

      ['age_id' => 1 , 'anatype_id' => 3],
      ['age_id' => 1 , 'anatype_id' => 4],
      ['age_id' => 1 , 'anatype_id' => 6],
      ['age_id' => 2 , 'anatype_id' => 1],
      ['age_id' => 2 , 'anatype_id' => 2],
      ['age_id' => 2 , 'anatype_id' => 3],
      ['age_id' => 2 , 'anatype_id' => 6],

    ]);
  }
}
