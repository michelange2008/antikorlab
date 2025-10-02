<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
          [
            'id' => 1,
            'titre' => "Faut-il craindre la petite douve ? ",
            'contenu' => "La petite douve (Dicrocoelium lanceolatum) est un parasite qui infeste le foie des ruminants dans les zones plutôt sèches. Ce paraisite survit dans le milieu extérieur grâce à des hôtes intermédiaires: escargot xérophile (= qui aime le sec) et fourmi. C'est en mangeant cette formi que les animaux se réinfestent. La petite douve est omniprésente dans le sud de la France et elle fréquemment responsable de saisie des foies à l'abattoir Alors doit-on traiter les troupeaux contre la petite douve ? La réponse est généralement NON !\n\r En effet, la petite douve n'a pas d'impact sur la santé de bovins, contrairement à la grande douve. chez les petits ruminants, le petite douve peut parfois provoquer des symptômes lors de très fortes infestations. Cela se traduit par de l'anémie (signe de la bouteille). Mais avant tout traitement, il faut s'assurer que ces symptômes ne sont pas provoqués par d'autres parasites (Haemonchus contortus).",
            'image' => "e1QfOazJqF8GAg06nXzGqOeL6PzSrtGcvSIrhzR0.jpeg",
            'user_id' => 1,
            'created_at' => "2019-03-18 00:00:00",
            'updated_at' => "2019-03-18 00:00:00",
          ]
        ]);
    }
}
