<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'name' => 'Administer roles & permissions',
                'created_at' => '2017-08-25 20:14:48',
                'updated_at' => '2017-08-25 20:14:48',
            ),
            1 => 
            array (
                'name' => 'Create Projet',
                'created_at' => '2017-08-25 20:14:59',
                'updated_at' => '2017-08-25 20:14:59',
            ),
            2 => 
            array (
                'name' => 'Edit Projet',
                'created_at' => '2017-08-25 20:15:11',
                'updated_at' => '2017-08-25 20:15:11',
            ),
            3 => 
            array (
                'name' => 'Delete Projet',
                'created_at' => '2017-08-25 20:15:23',
                'updated_at' => '2017-08-25 20:15:23',
            ),
            4 => 
            array (
                'name' => 'Create Partenaire',
                'created_at' => '2017-08-25 20:15:43',
                'updated_at' => '2017-08-25 20:15:43',
            ),
            5 => 
            array (
                'name' => 'Edit Partenaire',
                'created_at' => '2017-08-25 20:15:55',
                'updated_at' => '2017-08-25 20:15:55',
            ),
            6 => 
            array (
                'name' => 'Delete Partenaire',
                'created_at' => '2017-08-25 20:16:12',
                'updated_at' => '2017-08-25 20:16:12',
            ),
            7 => 
            array (
                'name' => 'Porteur De Projet Tools',
                'created_at' => '2017-08-27 16:56:00',
                'updated_at' => '2017-08-27 16:56:00',
            ),
            8 => 
            array (
                'name' => 'Like Projet',
                'created_at' => '2017-08-29 07:57:14',
                'updated_at' => '2017-08-29 07:57:14',
            ),
            9 => 
            array (
                'name' => 'Create Evenement',
                'created_at' => '2017-09-03 13:45:26',
                'updated_at' => '2017-09-03 13:45:26',
            ),
        ));
        
        
    }
}