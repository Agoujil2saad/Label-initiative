<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'created_at' => '2017-08-25 20:16:54',
                'updated_at' => '2017-08-25 20:16:54',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Porteur de Projet',
                'created_at' => '2017-08-25 20:17:14',
                'updated_at' => '2017-08-25 20:17:14',
            ),
        ));
        
        
    }
}