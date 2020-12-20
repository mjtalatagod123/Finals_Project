<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    
    return [
        'name' => $faker->word,
        'description' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'start' => $faker->date,
        'end' => $faker->date,
        'tags' => $faker->word,
        'instructor_id' => rand(1,5)

    ];
});
