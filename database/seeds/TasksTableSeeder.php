<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        Task::insert([
            'id'      => 1,
            'name'    => 'Task No. 1',
            'team_id' => 1,
        ]);
    }
}
