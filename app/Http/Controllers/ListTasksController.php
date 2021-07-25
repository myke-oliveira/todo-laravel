<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class ListTasksController extends Controller
{
    public function __invoke()
    {
        return Tasks::all();
    }
}
