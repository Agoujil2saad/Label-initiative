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
                'id' => 1,
                'name' => 'rochdi',
                'logo' => '1503692356.png',
                'created_at' => '2017-08-25 20:19:16',
                'updated_at' => '2017-08-25 20:19:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'hwaei',
                'logo' => '1503692388.png',
                'created_at' => '2017-08-25 20:19:48',
                'updated_at' => '2017-08-25 20:19:48',
            ),
        ));
        
        
    }
}