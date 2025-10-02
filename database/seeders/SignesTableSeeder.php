<?php

use Illuminate\Database\Seeder;

class SignesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('signes')->insert([
        [
          'nom' => 'signes.diarrhee',
        ],
        [
          'nom' => 'signes.amaigrissement',
        ],
        [
          'nom' => 'signes.poilainepique',
        ],
        [
          'nom' => 'signes.toux',
        ],
        [
          'nom' => 'signes.jetage',
        ],
        [
          'nom' => 'signes.anemie',
        ],
        [
          'nom' => 'signes.mauvcroissance',
        ],
      ]);
    }
}
