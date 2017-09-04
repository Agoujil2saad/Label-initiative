<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'message' => 'Canada',
                'is_seen' => 0,
                'deleted_from_sender' => 0,
                'deleted_from_receiver' => 0,
                'user_id' => 10,
                'conversation_id' => 1,
                'created_at' => '2017-08-29 12:22:07',
                'updated_at' => '2017-08-29 12:22:07',
            ),
        ));
        
        
    }
}