<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class GetTaskController extends Controller
{
    public function __invoke(int $id)
    {
        $task = Task::findOrFail($id);
        return $task;
    }
}
