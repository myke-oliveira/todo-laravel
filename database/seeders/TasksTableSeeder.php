<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        Task::create([
            'name' => 'Estudar PHP',
            'completed' => false
        ]);

        Task::create([
            'name' => 'Estudar JavaScript',
            'completed' => true
        ]);

        Task::create([
            'name' => 'Estudar Laravel',
            'completed' => false
        ]);
    }
}
