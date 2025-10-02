<?php

use Illuminate\Database\Seeder;

class EleveursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eleveurs')->insert([
          [
            'user_id' => 3,
            'num' =>"26000000",
            'address_1' => "125 allée des alouettes",
            'address_2' => "quartier des Grands Goulets",
            'cp' => "26300",
            'commune' => "Saint Vincent la Commanderie",
            'tel' => '0601234567',
            'veto_id' => 2,
          ],
          [
            'user_id' => 5,
            'num' =>"26111111",
            'address_1' => "125 allée des alouettes",
            'address_2' => null,
            'cp' => "26300",
            'commune' => "Combovin",
            'tel' => '0601234567',
            'veto_id' => null,
          ],
          [
            'user_id' => 6,
            'num' =>"26222222",
            'address_1' => "125 allée des alouettes",
            'address_2' => "quartier des renards",
            'cp' => "26300",
            'commune' => "Saint Vincent la Commanderie",
            'tel' => '0601234567',
            'veto_id' => 1,
          ],
          [
            'user_id' => 7,
            'num' =>"26333333",
            'address_1' => "125 allée des alouettes",
            'address_2' => null,
            'cp' => "26300",
            'commune' => "Rochefort-Samson",
            'tel' => '0601234567',
            'veto_id' => 2,
          ],
          [
            'user_id' => 12,
            'num' =>"26292539",
            'address_1' => "732 La Galane",
            'address_2' => null,
            'cp' => "26170",
            'commune' => "Saint Auban sur l'Ouvèze",
            'tel' => '0630843195',
            'veto_id' => null,
          ],
        ]);
    }
}
