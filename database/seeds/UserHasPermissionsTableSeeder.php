<?php

use Illuminate\Database\Seeder;

class UserHasPermissionsTableSeeder extends Seeder
{
    public function run()
    {
    	\DB::table('user_has_permissions')->delete();
    }
}