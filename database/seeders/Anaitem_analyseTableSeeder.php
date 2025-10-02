<?php

use Illuminate\Database\Seeder;
use App\Http\Traits\LitCsv;

class Anaitem_analyseTableSeeder extends Seeder
{
  use LitCsv;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $datas = $this->litCsv('LAB_analyses_anaitems');
// cette manip de marche pas je ne sais pas pourquoi...
// J'ai fais avec les memes commandes dans un autre fichier quelconque

        DB::table('anaitem_analyse')->insert([
          ['anaitem_id' => 1, 'analyse_id' => 1,],
          ['anaitem_id' => 2, 'analyse_id' => 1,],
          ['anaitem_id' => 3, 'analyse_id' => 1,],
          ['anaitem_id' => 4, 'analyse_id' => 1,],
          ['anaitem_id' => 5, 'analyse_id' => 1,],
          ['anaitem_id' => 1, 'analyse_id' => 2,],
          ['anaitem_id' => 2, 'analyse_id' => 2,],
          ['anaitem_id' => 3, 'analyse_id' => 2,],
          ['anaitem_id' => 4, 'analyse_id' => 2,],
          ['anaitem_id' => 5, 'analyse_id' => 2,],
          ['anaitem_id' => 1, 'analyse_id' => 3,],
          ['anaitem_id' => 12, 'analyse_id' => 3,],
          ['anaitem_id' => 6, 'analyse_id' => 4,],
          ['anaitem_id' => 6, 'analyse_id' => 5,],
          ['anaitem_id' => 10, 'analyse_id' => 6,],
          ['anaitem_id' => 1, 'analyse_id' => 7,],
          ['anaitem_id' => 2, 'analyse_id' => 7,],
          ['anaitem_id' => 4, 'analyse_id' => 7,],
          ['anaitem_id' => 3, 'analyse_id' => 7,],
          ['anaitem_id' => 5, 'analyse_id' => 7,],
          ['anaitem_id' => 6, 'analyse_id' => 8,],
          ['anaitem_id' => 10, 'analyse_id' => 9,],
          ['anaitem_id' => 1, 'analyse_id' => 10,],
          ['anaitem_id' => 12, 'analyse_id' => 10,],
          ['anaitem_id' => 1, 'analyse_id' => 11,],
          ['anaitem_id' => 4, 'analyse_id' => 11,],
          ['anaitem_id' => 3, 'analyse_id' => 11,],
          ['anaitem_id' => 5, 'analyse_id' => 11,],
          ['anaitem_id' => 12, 'analyse_id' => 11,],
          ['anaitem_id' => 1, 'analyse_id' => 12,],
          ['anaitem_id' => 2, 'analyse_id' => 12,],
          ['anaitem_id' => 3, 'analyse_id' => 12,],
          ['anaitem_id' => 4, 'analyse_id' => 12,],
          ['anaitem_id' => 5, 'analyse_id' => 12,],
          ['anaitem_id' => 7, 'analyse_id' => 12,],
          ['anaitem_id' => 1, 'analyse_id' => 13,],
          ['anaitem_id' => 2, 'analyse_id' => 13,],
          ['anaitem_id' => 3, 'analyse_id' => 13,],
          ['anaitem_id' => 4, 'analyse_id' => 13,],
          ['anaitem_id' => 5, 'analyse_id' => 13,],
          ['anaitem_id' => 7, 'analyse_id' => 13,],
          ['anaitem_id' => 1, 'analyse_id' => 14,],
          ['anaitem_id' => 3, 'analyse_id' => 14,],
          ['anaitem_id' => 2, 'analyse_id' => 14,],
          ['anaitem_id' => 4, 'analyse_id' => 14,],
          ['anaitem_id' => 5, 'analyse_id' => 14,],
          ['anaitem_id' => 7, 'analyse_id' => 14,],
          ['anaitem_id' => 8, 'analyse_id' => 15,],
          ['anaitem_id' => 9, 'analyse_id' => 15,],
          ['anaitem_id' => 8, 'analyse_id' => 16,],
          ['anaitem_id' => 8, 'analyse_id' => 17,],
          ['anaitem_id' => 9, 'analyse_id' => 16,],
          ['anaitem_id' => 9, 'analyse_id' => 17,],
          ['anaitem_id' => 1, 'analyse_id' => 18,],
          ['anaitem_id' => 2, 'analyse_id' => 18,],
          ['anaitem_id' => 3, 'analyse_id' => 18,],
          ['anaitem_id' => 4, 'analyse_id' => 18,],
          ['anaitem_id' => 1, 'analyse_id' => 19,],
          ['anaitem_id' => 2, 'analyse_id' => 19,],
          ['anaitem_id' => 3, 'analyse_id' => 19,],
          ['anaitem_id' => 4, 'analyse_id' => 19,],
          ['anaitem_id' => 1, 'analyse_id' => 20,],
          ['anaitem_id' => 2, 'analyse_id' => 20,],
          ['anaitem_id' => 3, 'analyse_id' => 20,],
          ['anaitem_id' => 4, 'analyse_id' => 20,],
          ['anaitem_id' => 1, 'analyse_id' => 21,],
          ['anaitem_id' => 3, 'analyse_id' => 21,],
          ['anaitem_id' => 4, 'analyse_id' => 21,],
          ['anaitem_id' => 12, 'analyse_id' => 21,],
          ['anaitem_id' => 12, 'analyse_id' => 22,],
          ['anaitem_id' => 1, 'analyse_id' => 22,],
          ['anaitem_id' => 1, 'analyse_id' => 23,],
          ['anaitem_id' => 12, 'analyse_id' => 23,],
        ]);

    }
}
