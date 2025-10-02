<?php

use Illuminate\Database\Seeder;

class EtatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etats')->insert([
          [ 'id' => 1, "nom" => "bon"],
          [ 'id' => 2, "nom" => "mauvais"],
          [ 'id' => 3, "nom" => "non utilisable"],
        ]);
    }
}
