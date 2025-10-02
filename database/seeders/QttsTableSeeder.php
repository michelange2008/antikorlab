<?php

use Illuminate\Database\Seeder;

class QttsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("qtts")->insert([
          [ 'id' => 1, "nom" => "valeur" ],
          [ 'id' => 2, "nom" => "estimation" ],
          [ 'id' => 3, "nom" => "presence" ],
          [ 'id' => 4, "nom" => "pourcentage" ],
        ]);
    }
}
