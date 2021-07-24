<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListTasksController;

Route::get('tasks/', ListTasksController::class);
