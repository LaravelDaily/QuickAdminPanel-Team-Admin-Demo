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
            ],
        ];

        User::insert($users);

    }
}
