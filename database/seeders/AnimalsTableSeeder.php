<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
          [
            'troupeau_id' => 2,
            'numero' => "50345",
            'nom' => 'Albert',
          ],
          [
            'troupeau_id' => 2,
            'numero' => "90456",
            'nom' => null,
          ],
          [
            'troupeau_id' => 2,
            'numero' => "32987",
            'nom' => null,
          ],
          [
            'troupeau_id' => 2,
            'numero' => "00235",
            'nom' => null,
          ],
        ]);
    }
}
