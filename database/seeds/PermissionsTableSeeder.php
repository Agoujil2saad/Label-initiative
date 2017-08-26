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
                'id' => 1,
                'name' => 'Administer roles & permissions',
                'created_at' => '2017-08-25 20:14:48',
                'updated_at' => '2017-08-25 20:14:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Create Projet',
                'created_at' => '2017-08-25 20:14:59',
                'updated_at' => '2017-08-25 20:14:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Edit Projet',
                'created_at' => '2017-08-25 20:15:11',
                'updated_at' => '2017-08-25 20:15:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Delete Projet',
                'created_at' => '2017-08-25 20:15:23',
                'updated_at' => '2017-08-25 20:15:23',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Create Partenaire',
                'created_at' => '2017-08-25 20:15:43',
                'updated_at' => '2017-08-25 20:15:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Edit Partenaire',
                'created_at' => '2017-08-25 20:15:55',
                'updated_at' => '2017-08-25 20:15:55',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Delete Partenaire',
                'created_at' => '2017-08-25 20:16:12',
                'updated_at' => '2017-08-25 20:16:12',
            ),
        ));
        
        
    }
}