<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // $this->call(IconesTableSeeder::class);
      // $this->call(EtatsTableSeeder::class);
      // $this->call(SignesTableSeeder::class);
      // $this->call(UsertypesTableSeeder::class);
      // $this->call(UsersTableSeeder::class);
      // $this->call(QttsTableSeeder::class);
      // $this->call(VetosTableSeeder::class);
      // $this->call(UnitesTableSeeder::class);
      // $this->call(EspecesTableSeeder::class);
      // $this->call(AgesTableSeeder::class);
      // $this->call(TvasTableSeeder::class);
      // $this->call(ModereglementsTableSeeder::class);
      // $this->call(EleveursTableSeeder::class);
      // $this->call(LabosTableSeeder::class);
      // $this->call(AnaitemsTableSeeder::class);
      // $this->call(AnatypesTableSeeder::class);
      // $this->call(AnaactesTableSeeder::class);
      // $this->call(AnalysesTableSeeder::class);
      // $this->call(Anatype_especeTableSeeder::class);
      // $this->call(FacturesTableSeeder::class);
      // $this->call(SeriesTableSeeder::class);
      // $this->call(DemandeTableSeeder::class);
      // $this->call(ActesTableSeeder::class);
      // $this->call(CommentairesTableSeeder::class);
      // $this->call(Anaitem_analyseTableSeeder::class);
      // $this->call(PrelevementsTableSeeder::class);
      // $this->call(ResultatsTableSeeder::class);
      // $this->call(OptionsTableSeeder::class);
      // $this->call(CategoriesTableSeeder::class);
      // $this->call(ObservationsTableSeeder::class);
      // $this->call(Espece_ObservationTableSeeder::class);
      // $this->call(ObservationOptionTableSeeder::class);
      // $this->call(Anaacte_ObservationTableSeeder::class);
      // $this->call(AnacteOptionTableSeeder::class);
      // $this->call(AnaacteEspeceTableSeeder::class);
      // $this->call(Age_ObservationTableSeeder::class);
      // $this->call(Age_AnaacteTableSeeder::class);
      // $this->call(BlogsTableSeeder::class);
      // $this->call(MelangesTableSeeder::class);
      $this->call(NewsSeeder::class);

    }
}
