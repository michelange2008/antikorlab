<?php

use Illuminate\Database\Seeder;

class TvasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tvas')->insert([
          [
            'id' => 4,
            'taux' => 0.20,
          ],
          [
            'id' => 2,
            'taux' => 0.10,
          ],
          [
            'id' => 3,
            'taux' => 0.055,
          ],
          [
            'id' => 1,
            'taux' => 0,
          ]
        ]);
    }
}
