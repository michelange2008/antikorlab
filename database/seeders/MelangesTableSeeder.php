<?php

use Illuminate\Database\Seeder;

class MelangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('melanges')->insert([
          [
            'id' => 1,
            'nom' => 'maigres',
            'anonyme' => true,
          ],
          [
            'id' => 2,
            'nom' => 'adultes',
            'anonyme' => true,
          ],
          [
            'id' => 3,
            'nom' => 'jeunes',
            'anonyme' => true,
          ],
          [
            'id' => 4,
            'nom' => 'divers',
            'anonyme' => true,
          ],
        ]);
    }
}
