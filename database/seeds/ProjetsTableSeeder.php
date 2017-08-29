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
                'id' => 3,
                'user_id' => 4,
                'title' => 'sad',
                'categorie' => 'type1',
                'description' => 'mdkj',
                'montant_estime' => 2000,
                'created_at' => '2017-08-26 21:49:17',
                'updated_at' => '2017-08-26 21:49:17',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 5,
                'title' => 'fsaf',
                'categorie' => 'type1',
                'description' => 'saffq',
                'montant_estime' => 2000,
                'created_at' => '2017-08-27 12:42:12',
                'updated_at' => '2017-08-27 12:42:12',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => 6,
                'title' => 'Proij',
                'categorie' => 'type1',
                'description' => 'Proi',
                'montant_estime' => 2000,
                'created_at' => '2017-08-27 17:06:13',
                'updated_at' => '2017-08-27 17:06:13',
            ),
            3 => 
            array (
                'id' => 6,
                'user_id' => 7,
                'title' => 'nomao',
                'categorie' => 'type1',
                'description' => 'sokka',
                'montant_estime' => 2000,
                'created_at' => '2017-08-27 17:09:07',
                'updated_at' => '2017-08-27 17:09:07',
            ),
            4 => 
            array (
                'id' => 7,
                'user_id' => 8,
                'title' => 'dSA',
                'categorie' => 'type1',
                'description' => 'SAs',
                'montant_estime' => 2000,
                'created_at' => '2017-08-27 17:12:14',
                'updated_at' => '2017-08-27 17:12:14',
            ),
            5 => 
            array (
                'id' => 8,
                'user_id' => 10,
                'title' => 'ygeq',
                'categorie' => 'type1',
                'description' => 'ebqy',
                'montant_estime' => 2000,
                'created_at' => '2017-08-29 10:32:56',
                'updated_at' => '2017-08-29 10:32:56',
            ),
        ));
        
        
    }
}