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

$factory->define(observatorio\Usuario::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'nascimento' => '21/02/1986',
        'sexo' => 'male',
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10)
    ];
});
