<?php

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

$factory->define(App\Agenda::class, function (Faker $faker) {
    return [
        'nombre'     => $faker->name,
        'direccion'  => $faker->address,
        'telefono'   => $faker->tollFreePhoneNumber, 
        'edad'       => $faker->regexify('^\d{1,2}$'), 

    ];
});
