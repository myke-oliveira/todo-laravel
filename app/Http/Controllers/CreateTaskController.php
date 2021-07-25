<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class CreateTaskController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'completed' => 'required|boolean',
        ]);

        $task = Task::create([
            'name' => $request->input('name'),
            'completed' => $request->input('completed')
        ]);

        return $task;
    }
}
