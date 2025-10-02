<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
          [
            "id" => 1,
            "nom" => "observations",
          ],
          [
            "id" => 2,
            "nom" => "actions",
          ],
          [
            "id" => 3,
            "nom" => "situation",
          ],
        ]);
    }
}
