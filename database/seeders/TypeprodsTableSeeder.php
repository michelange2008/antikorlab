<?php

use Illuminate\Database\Seeder;

class TypeprodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeprods')->insert([
          ['nom' => "brebis laitières", 'espece_id' => 2],
          ['nom' => "brebis allaitantes", 'espece_id' => 2],
          ['nom' => "agnelles", 'espece_id' => 2],
          ['nom' => "chèvres laitières", 'espece_id' => 3],
          ['nom' => "chevrettes", 'espece_id' => 3],
          ['nom' => "vaches laitières", 'espece_id' => 5],
          ['nom' => "vaches allaitantes", 'espece_id' => 5],
        ]);
    }
}
