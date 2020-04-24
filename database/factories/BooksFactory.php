<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        // 'id' => (\App\Books::class),
        'title' => $faker->sentence,
         'status' => $faker->sentence,
        //  'created_at' =>$faker->sentence,
        //  'updated_at' =>$faker->sentence
    ];
});
