<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke() {
        $persons = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'age' => 18,
                'job' => 'Web '
            ],
            [
                'id' => 2,
                'name' => 'John ',
                'age' => 45,
                'job' => ' Developer'
            ],
            [
                'id' => 3,
                'name' => ' Doe',
                'age' => 25,
                'job' => 'COOKr'
            ],
            [
                'id' => 4,
                'name' => 'Miha',
                'age' => 32,
                'job' => 'Web Developer'
            ],
        ];

        return $persons;
    }
}
