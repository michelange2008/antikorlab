<?php

use Illuminate\Database\Seeder;

class VetosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vetos')->insert([
        [
          'id' => 1,
          'user_id' => 4,
          'num' => "150362",
          'address_1' => '125 rue du Clocher',
          'cp' => '26400',
          'commune' => "Saint Agnan",
          'indicatif' => "33",
          'tel' => '0475483048',
        ],
        [
          'id' => 2,
          'user_id' => 13,
          'num' => "503018",
          'address_1' => '605 Grande Rue',
          'cp' => '26300',
          'commune' => "BARBIERES",
          'indicatif' => "33",
          'tel' => '0475472035',
        ],
      ]);
    }
}
