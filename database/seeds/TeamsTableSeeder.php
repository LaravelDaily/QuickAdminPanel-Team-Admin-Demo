<?php

use App\Team;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    public function run()
    {
        Team::insert([
            'id'   => 1,
            'name' => 'Team name',
        ]);
    }
}
