<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'id' => '5a450378-afce-4e79-8563-d47764adf01d',
                'type' => 'App\\Notifications\\NewProjetPostNotification',
                'notifiable_id' => 8,
                'notifiable_type' => 'App\\User',
                'data' => '{"message":"koka add new post to his project dSA","link":"\\/projet\\/7"}',
                'read_at' => '2017-08-31 09:47:57',
                'created_at' => '2017-08-30 19:33:20',
                'updated_at' => '2017-08-31 09:47:57',
            ),
            1 => 
            array (
                'id' => '6446f50b-aa32-44b6-ac65-9c22032940bb',
                'type' => 'App\\Notifications\\NewProjetPostNotification',
                'notifiable_id' => 8,
                'notifiable_type' => 'App\\User',
                'data' => '{"message":"koka add new post to his project dSA","link":"\\/projet\\/7"}',
                'read_at' => '2017-08-31 13:27:58',
                'created_at' => '2017-08-31 09:50:03',
                'updated_at' => '2017-08-31 13:27:58',
            ),
            2 => 
            array (
                'id' => '7b08f9de-7ff7-4e1a-8cd5-594805bf86bf',
                'type' => 'App\\Notifications\\NewProjetPostNotification',
                'notifiable_id' => 8,
                'notifiable_type' => 'App\\User',
                'data' => '{"message":"koka add new post to his project dSA","link":"\\/projet\\/7"}',
                'read_at' => '2017-08-30 20:04:00',
                'created_at' => '2017-08-30 19:32:22',
                'updated_at' => '2017-08-30 20:04:00',
            ),
            3 => 
            array (
                'id' => 'd08323a7-e006-45af-8b25-85007df7fe6d',
                'type' => 'App\\Notifications\\NewProjetPostNotification',
                'notifiable_id' => 8,
                'notifiable_type' => 'App\\User',
                'data' => '{"message":"koka add new post to his project dSA","link":"\\/projet\\/7"}',
                'read_at' => '2017-08-31 08:57:00',
                'created_at' => '2017-08-30 21:22:22',
                'updated_at' => '2017-08-31 08:57:00',
            ),
        ));
        
        
    }
}