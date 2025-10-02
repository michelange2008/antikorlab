<?php

use Illuminate\Database\Seeder;

class UnitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      DB::table('unites')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');

      DB::table("unites")->insert([
        [ 'id' => 1, "type" => "quantitatif", "nom" => "opg" ],
        [ 'id' => 2, "type" => "quantitatif", 'nom' => "ookystes" ],
        ['id' => 3, "type" => "quantitatif", "nom" => "larves" ],
        ['id' => 4, "type" => "quantitatif", "nom" => "%" ],
        ['id' => 5, "type" => "qualitatif", "nom" => "+/-" ],
        ['id' => 6, "type" => "qualitatif", "nom" => "-/+/++/+++" ],
      ]);
    }
}
