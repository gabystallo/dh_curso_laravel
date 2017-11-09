<?php

use Faker\Generator as Faker;

$factory->define(App\Pelicula::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'rating' => $faker->numberBetween(1,10),
        'release_date' => $faker->date,
        'genre_id' => App\Genero::inRandomOrder()->first()->id
    ];
});
