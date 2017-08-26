<?php

use Illuminate\Database\Seeder;

class EvenementsPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('evenements_photos')->delete();
        
        
        
    }
}