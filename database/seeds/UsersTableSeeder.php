<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$TASeU4vTSNoHgIAvjIzVfu4k3cGDOFoVqcSUK1uLJSpLRGnctek8W',
                'remember_token' => null,
                'team_id'        => null,
                'team_admin'     => false,
            ],
            [
                'id'             => 2,
                'name'           => 'Team Admin',
                'email'          => 'teamadmin@teamadmin.com',
                'password'       => '$2y$10$TASeU4vTSNoHgIAvjIzVfu4k3cGDOFoVqcSUK1uLJSpLRGnctek8W',
                'remember_token' => null,
                'team_id'        => 1,
                'team_admin'     => true,
            ],
            [
                'id'             => 3,
                'name'           => 'User',
                'email'          => 'user@user.com',
                'password'       => '$2y$10$TASeU4vTSNoHgIAvjIzVfu4k3cGDOFoVqcSUK1uLJSpLRGnctek8W',
                'remember_token' => null,
                'team_id'        => 1,
                'team_admin'     => false,
            ],
        ];

        User::insert($users);

    }
}
