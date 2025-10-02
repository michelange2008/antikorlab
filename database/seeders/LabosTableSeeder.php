<?php

use Illuminate\Database\Seeder;

class LabosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labos')->insert([
          [
            "user_id" => 1,
            "signature" => "mbouy_signature.jpg",
            "photo" => "mbouy.jpg",
            "fonction" => "vétérinaire",
            "est_signataire" => true,
          ],
          [
            "user_id" => 2,
            "signature" => "default.svg",
            "photo" => "alebre.jpg",
            "fonction" => "parasitologiste",
            "est_signataire" => true,
          ],
          [
            "user_id" => 8,
            "signature" => "default.svg",
            "photo" => "farsonneau.jpg",
            "fonction" => "directrice",
            "est_signataire" => false,
          ],
          [
            "user_id" => 9,
            "signature" => "default.svg",
            "photo" => "fheckendorn.jpg",
            "fonction" => "parasitologue",
            "est_signataire" => true,
          ],
          [
            "user_id" => 10,
            "signature" => "default.svg",
            "photo" => "eharinck.jpg",
            "fonction" => "administratrice",
            "est_signataire" => false,
          ],
          [
            "user_id" => 11,
            "signature" => "default.svg",
            "photo" => "lfito.jpg",
            "fonction" => "microbiologiste",
            "est_signataire" => false,
          ],
        ]);
    }
}
