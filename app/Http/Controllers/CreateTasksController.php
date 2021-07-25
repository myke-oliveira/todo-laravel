<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class CreateTasksController extends Controller
{
    public function __invoke(Request $request)
    {
        $task = Task::create([
            'name' => $request->input('name'),
            'completed' => $request->input('completed')
        ]);

        return $task;
    }
}
