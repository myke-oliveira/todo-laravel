<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListTasksController extends Controller
{
    public function __invoke()
    {
        return [
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
            [
                'id' => 3,
                'name' => 'Estudar Laravel',
                'completed' => false,
            ],
        ];
    }
}
