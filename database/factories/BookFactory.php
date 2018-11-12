<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'editorial' => $faker->sentence(2),
        'author'=> $faker->name,
        'synosis' => $faker->paragraph(1),
        'price' => $faker->randomFloat(2,9,50),
    ];
});
