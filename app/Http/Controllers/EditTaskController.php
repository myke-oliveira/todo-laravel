<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class EditTaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->name = $request->input('name');

        $task->save();

        return $task;
    }
}
