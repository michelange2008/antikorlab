<?php

use Illuminate\Database\Seeder;

class AnatypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      DB::table('anatypes')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('anatypes')->insert([
          [
            'id' => 1,
            'abbreviation' => "SGI",
            'nom' => "parasites gastro-intestinaux",
            'technique' => 'méthode quantitative McMaster - NaCl',
            'remarque' => null,
            'estAnalyse' => true,
            'icone_id' => 9,
          ],
          [
            'id' => 2,
            'abbreviation' => "SGI_DICR",
            'nom' => "parasites gastro-intestinaux + petite douve",
            'technique' => 'méthode quantitative McMaster - ZnCl2',
            'remarque' => "Concernant la petite douve, il s'agit seulement de résultats qualitatifs (présence/absence)",
            'estAnalyse' => true,
            'icone_id' => 32,
          ],
          [
            'id' => 3,
            'abbreviation' => "SGResp",
            'nom' => "strongles respiratoires",
            'technique' => 'méthode semi-quantitative de Baermann',
            'remarque' => null,
            'estAnalyse' => true,
            'icone_id' => 10,
          ],
          [
            'id' => 4,
            'abbreviation' => "GD_PARAM",
            'nom' => "grande douve et paramphistome",
            'technique' => 'méthode qualitative de sédimentation',
            'remarque' => "Pour des questions de fiabilité, cette analyse nécessite de prélever le même animal matin, midi et soir.",
            'estAnalyse' => true,
            'icone_id' => 31,
          ],
          [
            'id' => 5,
            'abbreviation' => "HAEM",
            'nom' => "quantification Haemonchus contortus",
            'technique' => 'analyse qPCR',
            'remarque' => "Cette quantification est une analyse innovante qui utilise la PCR quantitative",
            'estAnalyse' => true,
            'icone_id' => 15,
          ],
          [
            'id' => 6,
            'abbreviation' => "RESIST",
            'nom' => "test d'efficacité de produits vermifuges",
            'technique' => 'méthode quantitative McMaster - NaCl',
            'remarque' => "Dans le cas des bovins, cette analyse n'est fiable que si les animaux sont très contaminés.",
            'estAnalyse' => true,
            'icone_id' => 23,
          ],
          [
            'id' => 7,
            'abbreviation' => "KIT",
            'nom' => "Kit",
            'technique' => '',
            'remarque' => null,
            'estAnalyse' => false,
            'icone_id' => 16,
          ],
        ]);
    }
}
