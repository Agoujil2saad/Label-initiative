<?php

use Illuminate\Database\Seeder;

class ProjetNouvellesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('projet_nouvelles')->delete();
        
        \DB::table('projet_nouvelles')->insert(array (
            0 => 
            array (
                'projet_id' => 4,
                'title' => 'nouvelle',
                'description' => 'sada',
                'photo' => '1503839009.jpg',
                'created_at' => '2017-08-27 13:03:29',
                'updated_at' => '2017-08-27 13:03:29',
            ),
            1 => 
            array (
                'projet_id' => 4,
                'title' => 'la vie est belle',
                'description' => 'Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros.',
                'photo' => '1503842875.jpg',
                'created_at' => '2017-08-27 14:07:55',
                'updated_at' => '2017-08-27 14:07:55',
            ),
            2 => 
            array (
                'projet_id' => 6,
                'title' => 'hada 5abar',
                'description' => 'Proin magna. Quisque id odio. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc.',
                'photo' => '1503916347.png',
                'created_at' => '2017-08-28 10:32:27',
                'updated_at' => '2017-08-28 10:32:27',
            ),
            3 => 
            array (
                'projet_id' => 6,
                'title' => 'ta hada 5abar',
                'description' => 'Sed hendrerit. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor.',
                'photo' => '1503916399.jpg',
                'created_at' => '2017-08-28 10:33:19',
                'updated_at' => '2017-08-28 10:33:19',
            ),
            4 => 
            array (
                'projet_id' => 6,
                'title' => 'hada 5abar 5abar',
                'description' => 'Cras varius. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Ut id nisl quis enim dignissim sagittis.',
                'photo' => '1503916447.jpg',
                'created_at' => '2017-08-28 10:34:07',
                'updated_at' => '2017-08-28 10:34:07',
            ),
            5 => 
            array (
                'projet_id' => 2,
                'title' => 'sad',
                'description' => 'dasad',
                'photo' => '1504121600.png',
                'created_at' => '2017-08-30 19:33:20',
                'updated_at' => '2017-08-30 19:33:20',
            ),
            6 => 
            array (
                'projet_id' => 3,
                'title' => 'sad',
                'description' => 'sadadas',
                'photo' => '1504128142.png',
                'created_at' => '2017-08-30 21:22:22',
                'updated_at' => '2017-08-30 21:22:22',
            ),
            7 => 
            array (
                'projet_id' => 3,
                'title' => 'sad',
                'description' => 'sad',
                'photo' => '1504173003.jpg',
                'created_at' => '2017-08-31 09:50:03',
                'updated_at' => '2017-08-31 09:50:03',
            ),
        ));
        
        
    }
}