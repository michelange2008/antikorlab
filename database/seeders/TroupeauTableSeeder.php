<?php

use Illuminate\Database\Seeder;

class TroupeauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('troupeaus')->insert([
          [
            "nom" => "Vaches",
            "user_id" => 16,
            "espece_id" => 5,
            "typeprod_id" => 7,
          ],
          [
            "nom" => "Chèvres",
            "user_id" => 16,
            "espece_id" => 3,
            "typeprod_id" => 4,
          ],

        ]);
    }
}
