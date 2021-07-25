<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListTasksController;
use App\Http\Controllers\GetTaskController;
use App\Http\Controllers\CreateTaskController;

Route::get('tasks/', ListTasksController::class);
Route::get('tasks/{id}', GetTaskController::class);
Route::post('tasks/', CreateTaskController::class);
