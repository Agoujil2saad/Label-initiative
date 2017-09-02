<?php

use Illuminate\Database\Seeder;

class PartenairesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partenaires')->delete();
        
        \DB::table('partenaires')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'SENERGIE',
                'logo' => '1504211695.png',
                'created_at' => '2017-08-31 20:34:55',
                'updated_at' => '2017-08-31 20:34:55',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'HUAWEI',
                'logo' => '1504211947.jpg',
                'created_at' => '2017-08-31 20:39:07',
                'updated_at' => '2017-08-31 20:39:07',
            ),
        ));
        
        
    }
}