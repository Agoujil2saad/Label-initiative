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
                'remember_token' => 'RsmOU50BGhEurVdlWQKk2tIIPgDE9aJdlHyZqnp4fbo84Zh6At99wA8JGD1l',
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
            2 => 
            array (
                'id' => 3,
                'name' => 'sad',
                'email' => 'dkjankj',
                'password' => '$2y$10$k.aIcBqB6YAzcx2dFOYUmOL7TKvuls7BljaHbZFElRAlktPCFuF4q',
                'address' => 'njfkankj',
                'categorie' => 'type1',
                'fonction' => 'sss',
                'region' => 'reg1',
                'tel' => 'fjkankf',
                'remember_token' => 'Qs0RMhhbj0a9UImuC662hzCeqoHqedcBVtY2QZrJ0lxdmu7xsqS399In2TvM',
                'created_at' => '2017-08-26 10:43:23',
                'updated_at' => '2017-08-26 10:43:23',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'sad',
                'email' => 'kfjna',
                'password' => '$2y$10$4duImLB71d.NdaEV8/54EuyOsXTrl37viH.U7NHBq2UjLuOur7ohO',
                'address' => 'toi',
                'categorie' => 'type2',
                'fonction' => 'sad',
                'region' => 'reg1',
                'tel' => 'd131098',
                'remember_token' => NULL,
                'created_at' => '2017-08-26 21:49:17',
                'updated_at' => '2017-08-26 21:49:17',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'sad',
                'email' => 'faq',
                'password' => '$2y$10$ecxCfwcSpuvqdSRAzcu8V.UxDDVOvp1jZBzcHT5yJ9l9opoTYMg2C',
                'address' => 'asffq',
                'categorie' => 'type1',
                'fonction' => 'fas',
                'region' => 'reg1',
                'tel' => 'fas',
                'remember_token' => 'fmMl7dChCXh2gRPLNZ9HeOGC69vsZqt1qE67lzeMknoyONAhIxxQuyDSNoyX',
                'created_at' => '2017-08-27 12:42:12',
                'updated_at' => '2017-08-27 12:42:12',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'sad',
                'email' => 'test@domain.tld',
                'password' => '$2y$10$w4SlqakfNytuWICmlQ7XcehOEWRGjc8jGB1wI6FQnxkjF.F.6sEp6',
                'address' => 'Aenea',
                'categorie' => 'type2',
                'fonction' => 'Nunc nec',
                'region' => 'reg1',
                'tel' => '26.8.2019',
                'remember_token' => 'LMLQusI7Y31G5sRKq5jwT76PX4oA0YB3lVzixhejXeaIuSH1aFq6BuZ9cT4A',
                'created_at' => '2017-08-27 17:06:13',
                'updated_at' => '2017-08-27 17:06:13',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'dood',
                'email' => 'test@domain.tld2',
                'password' => '$2y$10$rIWA8Y9ZY6fpM.tABAfhne7WxXBzRL3cO3Bi35j9zIrZ17ilXkWSC',
                'address' => 'jnf',
                'categorie' => 'type1',
                'fonction' => 'jo',
                'region' => 'reg2',
                'tel' => 'fkjnjk',
                'remember_token' => 'Su4n0etHSmqtBKYxxMDNjc7APPMc1ObdAtU9XcTa04RsAYGSUFPNcsc0wN3k',
                'created_at' => '2017-08-27 17:09:07',
                'updated_at' => '2017-08-27 17:09:07',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'koka',
                'email' => 'test@domain.tld3',
                'password' => '$2y$10$3/QRr3/vKMUz4uAoG5PwZu.ca4rxduXKh69yNpUp02YirE3sGYX7m',
                'address' => 'adf',
                'categorie' => 'type1',
                'fonction' => 'fun',
                'region' => 'reg2',
                'tel' => 'telk',
                'remember_token' => NULL,
                'created_at' => '2017-08-27 17:12:14',
                'updated_at' => '2017-08-27 17:12:14',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'sad',
                'email' => 'test@domain.tld12',
                'password' => '$2y$10$grtrD.tGSW2HfACR3PUKy.pjAdzvnV46DaZroSmE782.ZGA8IekeG',
                'address' => 'asd',
                'categorie' => 'type2',
                'fonction' => 'sjd',
                'region' => 'reg2',
                'tel' => '6789',
                'remember_token' => 'iWu9AHksDHg8KZIeZ3rGLM90yfeDBWM7UQSuXQZSTIDvhXbAGQRA2rUKzxbh',
                'created_at' => '2017-08-29 10:32:56',
                'updated_at' => '2017-08-29 10:32:56',
            ),
        ));
        
        
    }
}