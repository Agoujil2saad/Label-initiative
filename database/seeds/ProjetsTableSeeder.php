<?php

use Illuminate\Database\Seeder;

class ProjetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projets')->delete();
        
        \DB::table('projets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'title' => 'peonfjkan',
                'categorie' => 'type1',
                'description' => 'kakk',
                'montant_estime' => 2000,
                'created_at' => '2017-08-25 20:21:25',
                'updated_at' => '2017-08-25 20:21:25',
            ),
        ));
        
        
    }
}