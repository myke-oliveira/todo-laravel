<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListTasksController;
use App\Http\Controllers\GetTaskController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\EditTaskController;
use App\Http\Controllers\DeleteTaskController;

Route::get('tasks/', ListTasksController::class);
Route::get('tasks/{id}', GetTaskController::class);
Route::post('tasks/', CreateTaskController::class);
Route::patch('tasks/{id}', EditTaskController::class);
Route::delete('tasks/{id}', DeleteTaskController::class);
