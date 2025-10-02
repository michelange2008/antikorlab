<?php

use Illuminate\Database\Seeder;

class EspecesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especes')->delete();
        
        DB::table('especes')->insert([
          [
            'id' => 2,
            "nom" => "Ovins",
            'abbreviation' => "ov",
            "icone_id" => 5,
          ],
          [
            'id' => 3,
            "nom" => "Caprins",
            'abbreviation' => "cp",
            "icone_id" => 3,
          ],
          [
            'id' => 5,
            "nom" => "Bovins",
            'abbreviation' => "bv",
            "icone_id" => 2,
          ],
          [
            'id' => 6,
            "nom" => "Porcins",
            'abbreviation' => "pc",
            "icone_id" => 6,
          ],
          [
            'id' => 7,
            "nom" => "Chevaux",
            'abbreviation' => "cv",
            "icone_id" => 4,
          ],
          [
            'id' => 8,
            "nom" => "Ânes",
            'abbreviation' => "ane",
            "icone_id" => 26,
          ],

        ]);
    }
}
