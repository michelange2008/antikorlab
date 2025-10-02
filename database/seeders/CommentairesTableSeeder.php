<?php

use Illuminate\Database\Seeder;

class CommentairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $datas = [];

      for ($i=1; $i < 12; $i++) {

        $datas[] = [
          'id' => $i,
          'demande_id' => $i,
          'labouser_id' => null,
          'commentaire' => null,
          'date_commentaire' => null,
        ];

      }

      DB::table('commentaires')->insert($datas);

    }

}
