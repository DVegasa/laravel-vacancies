<?php

namespace App\Models;

class Vacancy {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'Generate dumb text for your applications.',
            ],
            [
                'id' => 2,
                'title' => 'Laravel Developer',
                'description' => 'We love cats.',
            ],
            [
                'id' => 3,
                'title' => 'Vue.js Developer',
                'description' => 'Meowser is a nice cat',
            ],
        ];
    }
}
