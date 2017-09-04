<?php

use Illuminate\Database\Seeder;

class FollowablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('followables')->delete();
        
        \DB::table('followables')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'followable_id' => 6,
                'followable_type' => 'App\\Projet',
                'relation' => 'favorite',
                'created_at' => '2017-08-28 16:41:54',
            ),
            1 => 
            array (
                'user_id' => 1,
                'followable_id' => 7,
                'followable_type' => 'App\\Projet',
                'relation' => 'favorite',
                'created_at' => '2017-08-28 16:54:07',
            ),
            2 => 
            array (
                'user_id' => 1,
                'followable_id' => 4,
                'followable_type' => 'App\\Projet',
                'relation' => 'favorite',
                'created_at' => '2017-08-28 18:05:25',
            ),
        ));
        
        
    }
}