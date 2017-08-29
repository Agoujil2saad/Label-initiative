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
        
        \DB::table('projets_photos')->insert(array (
            0 => 
            array (
                'id' => 6,
                'projet_id' => 3,
                'filename' => 'photos/LGims2NU1W1rnHJ8Czpc9u6w1WZoIeyD5GoF8lNx.png',
                'created_at' => '2017-08-26 22:29:34',
                'updated_at' => '2017-08-26 22:29:34',
            ),
            1 => 
            array (
                'id' => 7,
                'projet_id' => 3,
                'filename' => 'photos/Nb6Hq5GV92VSN6Md1yAFU9KwkzDRhz442jKpoAbU.jpeg',
                'created_at' => '2017-08-26 22:29:34',
                'updated_at' => '2017-08-26 22:29:34',
            ),
            2 => 
            array (
                'id' => 8,
                'projet_id' => 3,
                'filename' => 'photos/KfwrCEMkytRf058EpwK7Z8mlGJTXJdKIPtjj9aap.jpeg',
                'created_at' => '2017-08-26 22:29:34',
                'updated_at' => '2017-08-26 22:29:34',
            ),
            3 => 
            array (
                'id' => 10,
                'projet_id' => 4,
                'filename' => 'photos/MWCsVxzxoab9ckUS35PwjBO4CZomAleWTn4ihjck.jpeg',
                'created_at' => '2017-08-27 13:19:43',
                'updated_at' => '2017-08-27 13:19:43',
            ),
            4 => 
            array (
                'id' => 11,
                'projet_id' => 4,
                'filename' => 'photos/aDSFAunHMLwI50Fc0TxJ4cjRmC8s93ergOeWmBDl.jpeg',
                'created_at' => '2017-08-27 13:19:43',
                'updated_at' => '2017-08-27 13:19:43',
            ),
            5 => 
            array (
                'id' => 12,
                'projet_id' => 6,
                'filename' => 'photos/HEc8xJADiAGcwSVkJ4Yt3XfrCZF6g9CibLXqMVa7.jpeg',
                'created_at' => '2017-08-28 10:36:33',
                'updated_at' => '2017-08-28 10:36:33',
            ),
            6 => 
            array (
                'id' => 13,
                'projet_id' => 6,
                'filename' => 'photos/uvSgL6sIwkDUUZpKBgw6wAsnTFMAtGxwYAbNAOPd.jpeg',
                'created_at' => '2017-08-28 10:36:33',
                'updated_at' => '2017-08-28 10:36:33',
            ),
            7 => 
            array (
                'id' => 14,
                'projet_id' => 6,
                'filename' => 'photos/T6xL8LJgLUeKCU8GjAvIQnQ3mocdIc8qUD8FaAoD.png',
                'created_at' => '2017-08-28 10:36:33',
                'updated_at' => '2017-08-28 10:36:33',
            ),
            8 => 
            array (
                'id' => 16,
                'projet_id' => 8,
                'filename' => 'photos/5MGn8Q0XOLhYvDfhHmp9Cpwuz71dVrQWi2O1lH1D.png',
                'created_at' => '2017-08-29 11:00:38',
                'updated_at' => '2017-08-29 11:00:38',
            ),
            9 => 
            array (
                'id' => 17,
                'projet_id' => 8,
                'filename' => 'photos/s4olfHxI2BEN4GiBf6qmwc4C6zGugndy9EpxnPeK.png',
                'created_at' => '2017-08-29 11:00:38',
                'updated_at' => '2017-08-29 11:00:38',
            ),
            10 => 
            array (
                'id' => 18,
                'projet_id' => 8,
                'filename' => 'photos/LUiqnBorrYNSRvmMi7P2rcZFH4srgTseSE21LE4t.jpeg',
                'created_at' => '2017-08-29 11:00:38',
                'updated_at' => '2017-08-29 11:00:38',
            ),
            11 => 
            array (
                'id' => 19,
                'projet_id' => 8,
                'filename' => 'photos/r16aLufzICKn8fjPZydP53BRpRc0M044bxVQ5oCP.jpeg',
                'created_at' => '2017-08-29 11:00:38',
                'updated_at' => '2017-08-29 11:00:38',
            ),
        ));
        
        
    }
}