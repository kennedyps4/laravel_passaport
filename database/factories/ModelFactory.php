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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => 'kennedy'/* faker->name */,
        'email' => 'kennedyps1@gmail.com'/* $faker->unique()->safeEmail */,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(100),
    ];
});
