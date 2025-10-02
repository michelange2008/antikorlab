<?php

use Illuminate\Database\Seeder;

class AnaitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('anaitems')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('anaitems')->insert([
          [
            'id' => 1,
            "abbreviation" => "SGIN",
            "nom" => "strongles gastro-intestinaux",
            "unite_id" => "1",
            "qtt_id" => "1",
            "image" => "SGIN.png",
          ],
          [
            'id' => 2,
            "abbreviation" => "NEMA",
            "nom" => "nématodirus",
            "unite_id" => "1",
            "qtt_id" => "1",
            "image" => "NEMA.png",
          ],
          [
            'id' => 3,
            "abbreviation" => "TRIC",
            "nom" => "trichuris",
            "unite_id" => "5",
            "qtt_id" => "3",
            "image" => "TRIC.png",
          ],
          [
            'id' => 4,
            "abbreviation" => "STRY",
            "nom" => "strongyloïdes",
            "unite_id" => "5",
            "qtt_id" => "3",
            "image" => "STRY.png",
          ],
          [
            'id' => 5,
            "abbreviation" => "COCC",
            "nom" => "coccidies",
            "unite_id" => "6",
            "qtt_id" => "2",
            "image" => "COCC.png",
          ],
          [
            'id' => 6,
            "abbreviation" => "RESP",
            "nom" => "strongles respiratoires",
            "unite_id" => "3",
            "qtt_id" => "2",
            "image" => "RESP.png",
          ],
          [
            'id' => 7,
            "abbreviation" => "DICR",
            "nom" => "petite douve",
            "unite_id" => "5",
            "qtt_id" => "3",
            "image" => "DICR.png",
          ],
          [
            'id' => 8,
            "abbreviation" => "FASC",
            "nom" => "grande douve",
            "unite_id" => "5",
            "qtt_id" => "3",
            "image" => "FASC.png",
          ],
          [
            'id' => 9,
            "abbreviation" => "PHIS",
            "nom" => "paramphistome",
            "unite_id" => "1",
            "qtt_id" => "1",
            "image" => "PHIS.png",
          ],
          [
            'id' => 10,
            "abbreviation" => "HAEM",
            "nom" => "haemonchus",
            "unite_id" => "4",
            "qtt_id" => "4",
            "image" => "HAEM.png",
          ],
          [
            'id' => 11,
            "abbreviation" => "MONI",
            "nom" => " ténia (moniezia expansa)",
            "unite_id" => "5",
            "qtt_id" => "3",
            "image" => "MONI.png",
          ],
          [
            'id' => 12,
            "abbreviation" => "ASCA",
            "nom" => "ascaris",
            "unite_id" => "5",
            "qtt_id" => "3",
            "image" => "ASCA.png",
          ],
        ]);
    }
}
