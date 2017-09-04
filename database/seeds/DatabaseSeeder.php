<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        $this->call(UsersTableSeeder::class);
        $this->call(ProjetsTableSeeder::class);
        $this->call(EvenementsTableSeeder::class);
        $this->call(PartenairesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(EvenementsPhotosTableSeeder::class);
        $this->call(ProjetsPhotosTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(UserHasPermissionsTableSeeder::class);
        $this->call(UserHasRolesTableSeeder::class);
        $this->call(ProjetNouvellesTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(FollowablesTableSeeder::class);
        $this->call(ConversationsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
    }
}
