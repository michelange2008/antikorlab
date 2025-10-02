<?php

use Illuminate\Database\Seeder;

class ModereglementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modereglements')->insert([
          [
            "id" => 3,
            "nom" => "espèces",
            'icone_id' =>28,
          ],
          [
            "id" => 2,
            "nom" => "virement",
            'icone_id' =>29,
          ],
          [
            "id" => 1,
            "nom" => "chèque",
            'icone_id' =>30,
          ],
        ]);
    }
}
