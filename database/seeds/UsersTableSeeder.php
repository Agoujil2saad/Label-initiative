<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin agoujil',
                'email' => 'agoujilsaad@gmail.com',
                'password' => '$2y$10$vgIGBw.xLPXbnTi3FaGJ8uXjLmgKTdEUocBtwOX/c1zseJCnUFKHq',
                'address' => NULL,
                'categorie' => NULL,
                'fonction' => NULL,
                'region' => NULL,
                'tel' => NULL,
                'remember_token' => 'cZeJdsRtH1xOPYYZwKC1wDviT2YPqVef62qTGDArl16ez8nV3o3FC55B95fX',
                'created_at' => '2017-08-25 20:14:30',
                'updated_at' => '2017-08-25 20:18:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'hama',
                'email' => 'sad',
                'password' => '$2y$10$FauKjKmS3TaSDS1bBYEac.eWwjPsQas/koEENzgyRlioPLcha4iaq',
                'address' => 'sad',
                'categorie' => 'type2',
                'fonction' => 'sadd',
                'region' => 'reg1',
                'tel' => 'das',
                'remember_token' => NULL,
                'created_at' => '2017-08-25 20:21:25',
                'updated_at' => '2017-08-25 20:21:25',
            ),
        ));
        
        
    }
}