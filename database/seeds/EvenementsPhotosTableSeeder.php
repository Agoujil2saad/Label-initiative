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
        
        \DB::table('evenements_photos')->insert(array (
            0 => 
            array (
                'evenement_id' => 1,
                'filename' => 'photos/YmPbr2qfkRuDNN7eQj1TkucpyFxy6Dw6CAcMYWjm.png',
                'created_at' => '2017-09-03 13:49:46',
                'updated_at' => '2017-09-03 13:49:46',
            ),
            1 => 
            array (
                'evenement_id' => 1,
                'filename' => 'photos/tws1A1YfL4CcIjLK7wz17LaolKtzRnJqvz0o2mmT.png',
                'created_at' => '2017-09-03 13:49:46',
                'updated_at' => '2017-09-03 13:49:46',
            ),
            2 => 
            array (
                'evenement_id' => 1,
                'filename' => 'photos/N93gTv3K3dYUncUN3nzmjNNt2Hrpt6n57UgN1OtF.png',
                'created_at' => '2017-09-03 13:49:46',
                'updated_at' => '2017-09-03 13:49:46',
            ),
            3 => 
            array (
                'evenement_id' => 1,
                'filename' => 'photos/VBB78wWmHJPHqWBxYgSHnVw5Z4Xun3e0NyGJwBiU.jpeg',
                'created_at' => '2017-09-03 13:49:46',
                'updated_at' => '2017-09-03 13:49:46',
            ),
            4 => 
            array (
                'evenement_id' => 1,
                'filename' => 'photos/sYxis1FSU4KNgZP1bT0VwFhkbHxEd3T3WpcwIein.jpeg',
                'created_at' => '2017-09-03 13:49:46',
                'updated_at' => '2017-09-03 13:49:46',
            ),
        ));
        
        
    }
}