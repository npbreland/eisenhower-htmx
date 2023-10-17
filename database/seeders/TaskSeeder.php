<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Task 1',
                'category' => 'do',
            ],
            [
                'title' => 'Task 2',
                'category' => 'do',
            ],
            [
                'title' => 'Task 3',
                'category' => 'do',
            ],
            [
                'title' => 'Task 4',
                'category' => 'do',
            ],
            [
                'title' => 'Task 5',
                'category' => 'delegate',
            ],
            [
                'title' => 'Task 6',
                'category' => 'delegate',
            ],
            [
                'title' => 'Task 7',
                'category' => 'delegate',
            ],
            [
                'title' => 'Task 8',
                'category' => 'schedule',
            ],
            [
                'title' => 'Task 9',
                'category' => 'schedule',
            ],
            [
                'title' => 'Task 10',
                'category' => 'delete',
            ],
        ];

        foreach ($tasks as $task) {
            DB::table('tasks')->insert($task);
        }
    }
}
