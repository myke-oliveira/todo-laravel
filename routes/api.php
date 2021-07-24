<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('tasks/', function (Request $request, Response $response) {
    $tasks = [
        [
            'id' => 1,
            'name' => 'Estudar PHP 7',
            'completed' => false,
        ],
        [
            'id' => 2,
            'name' => 'Estudar JavaScript',
            'completed' => true,
        ],
    ];

    return $tasks;
});
