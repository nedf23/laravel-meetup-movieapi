<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Movie;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'summary' => $faker->text(),
        'image' => 'https://via.placeholder.com/150x200',
    ];
});
