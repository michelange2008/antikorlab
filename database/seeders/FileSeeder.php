<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([

            [
                'nom' => 'fiche_prelev_equ.pdf',
                'description' => 'Fiche de prélèvement pour les équidés',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'fiche_prelev_rum.pdf',
                'description' => 'Fiche de prélèvement pour les ruminants',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_ane.pdf',
                'description' => 'Demande d\'analyse pour les ânes',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_bv.pdf',
                'description' => 'Demande d\'analyse pour les bovins',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_cp.pdf',
                'description' => 'Demande d\'analyse pour les caprins',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_cv.pdf',
                'description' => 'Demande d\'analyse pour les chevaux',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_equ.pdf',
                'description' => 'Demande d\'analyse pour les équidés',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_ov.pdf',
                'description' => 'Demande d\'analyse pour les ovins',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_pc.pdf',
                'description' => 'Demande d\'analyse pour les porcs',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire.pdf',
                'description' => 'Demande d\'analyse',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_pl.pdf',
                'description' => 'Demande d\'analyse pour les volailles',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_rum.pdf',
                'description' => 'Demande d\'analyse pour les ruminants',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'formulaire_vierge.pdf',
                'description' => 'Demande d\'analyse toutes espèces',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'rgpd.pdf',
                'description' => 'Document relatif au RGPD',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'rib.pdf',
                'description' => 'RIB du FiBL',
                'extension' => 'pdf',
                'requis' => 1,
            ],
            [
                'nom' => 'tarifs.pdf',
                'description' => 'Tarifs des analyses',
                'extension' => 'pdf',
                'requis' => 1,
            ],
        ]);
    }
}
