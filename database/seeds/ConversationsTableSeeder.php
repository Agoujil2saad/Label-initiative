<?php

use Illuminate\Database\Seeder;

class ConversationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('conversations')->delete();
        
        \DB::table('conversations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_one' => 2,
                'user_two' => 10,
                'status' => 1,
                'created_at' => '2017-08-29 12:22:07',
                'updated_at' => '2017-08-29 12:22:07',
            ),
        ));
        
        
    }
}