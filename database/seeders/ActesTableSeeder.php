<?php

use Illuminate\Database\Seeder;

class ActesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actes')->insert([
          [
            'id' => 1,
            'user_id' => 3,
            'anaacte_id'=> 14,
            'nombre' => 2,
            'facturee' => false ,
            'facture_id' => null,
            'created_at' => "2019-11-06 00:00:00",
            'updated_at' => "2019-11-06 00:00:00",
          ],
          [
            'id' => 2,
            'user_id' => 5,
            'anaacte_id'=> 14,
            'nombre' => 1,
            'facturee' => false ,
            'facture_id' => null,
            'created_at' => "2019-10-15 00:00:00",
            'updated_at' => "2019-10-15 00:00:00",
          ],
          [
            'id' => 3,
            'user_id' => 7,
            'anaacte_id'=> 14,
            'nombre' => 3,
            'facturee' => false ,
            'facture_id' => null,
            'created_at' => "2019-12-06 00:00:00",
            'updated_at' => "2019-12-06 00:00:00",
          ],
          [
            'id' => 4,
            'user_id' => 5,
            'anaacte_id'=> 14,
            'nombre' => 2,
            'facturee' => false ,
            'facture_id' => null,
            'created_at' => "2020-02-26 00:00:00",
            'updated_at' => "2020-02-26 00:00:00",
          ],
          [
            'id' => 5,
            'user_id' => 5,
            'anaacte_id'=> 14,
            'nombre' => 1,
            'facturee' => false ,
            'facture_id' => null,
            'created_at' => "2020-01-06 00:00:00",
            'updated_at' => "2020-01-06 00:00:00",
          ],
        ]);
    }
}
