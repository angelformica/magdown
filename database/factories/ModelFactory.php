<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Magazine::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'publication_date' => $faker->date('Y-m-d'),
        'description' => $faker->realText(200),
        'user_id' => rand(2,10),
        'language_id' => rand(1,3),
        'category_id' => rand(1,5)
    ];
});