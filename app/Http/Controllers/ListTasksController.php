<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class ListTasksController extends Controller
{
    public function __invoke()
    {
        return Task::all();
    }
}
