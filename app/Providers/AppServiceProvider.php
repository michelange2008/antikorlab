<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        setlocale(LC_TIME, config('app.locale'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Blade::directive('date', function ($expression) {
          return "<?php echo ($expression)->format('d M Y'); ?>";
      });

      Blade::include('admin.eleveurDetail','eleveurDetail');
      Blade::include('fragments.nomLien','nomLien');
      Blade::include('fragments.voir','voir');
      Blade::include('fragments.ouinon','ouinon');
      Blade::include('fragments.supprLigne','supprLigne');
      Blade::include('fragments.modifierLigne','modifierLigne');
      Blade::include('fragments.dateSortable','dateSortable');
      Blade::include('fragments.flash','flash');
      Blade::include('labo.demandeShow', 'demandeShow');
      Blade::include('labo.serieShow', 'serieShow');
      Blade::include('fragments.titre', 'titre');
      Blade::include('admin.titreCreationUser', 'titreCreationUser');

      Blade::include('fragments.image', 'image');

      Blade::include('fragments.bouton', 'bouton');
      Blade::include('fragments.boutonUser', 'boutonUser');
      Blade::include('fragments.boutonSavoirPlus', 'boutonSavoirPlus');
      Blade::include('fragments.boutonRetour', 'retour');
      Blade::include('fragments.boutonEnregistre', 'enregistre');
      Blade::include('fragments.boutonSupprimer', 'supprimer');
      Blade::include('fragments.blocEnregistreAnnule', 'enregistreAnnule');

      Blade::include('admin.form.inputText', 'inputText');
      Blade::include('admin.form.inputTextarea', 'inputTextarea');
      Blade::include('admin.form.inputImage', 'inputImage');
      Blade::include('admin.form.inputFile', 'inputFile');
      Blade::include('admin.form.inputOuiNon', 'inputOuiNon');
      Blade::include('admin.form.supprExclusion', 'supprExclusion');
      Blade::include('admin.form.inputEspece', 'inputEspece');
      Blade::include('admin.form.inputTypeprod', 'inputTypeprod');
      Blade::include('admin.form.inputNomtroupeau', 'inputNomtroupeau');
      Blade::include('admin.form.inputChoixEleveur', 'inputChoixEleveur');
      Blade::include('admin.form.inputChoixTroupeau', 'inputChoixTroupeau');


    }
}
