<?php

use Illuminate\Database\Seeder;

class EvenementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('evenements')->delete();
        
        \DB::table('evenements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'L\'édition 2015 du Festival Village Durable',
                'body' => 'L\'édition 2015 du Festival Village Durable , axé sur le rôle de la société civile, avait pour objectif de créer un espace de dialogue, valorisant les initiatives et le savoir-faire des acteurs locaux, mettant en avant les institutions publiques, contribuant ainsi au rayonnement des zones rurales de la Province de Kenitra.',
                'created_at' => '2017-09-03 13:49:46',
                'updated_at' => '2017-09-03 13:49:46',
            ),
        ));
        
        
    }
}