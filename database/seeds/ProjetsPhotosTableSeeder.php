<?php

use Illuminate\Database\Seeder;

class ProjetsPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projets_photos')->delete();
        
        
        
    }
}