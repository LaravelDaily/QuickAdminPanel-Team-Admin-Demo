<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            TeamsTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            TasksTableSeeder::class,
        ]);

    }
}
