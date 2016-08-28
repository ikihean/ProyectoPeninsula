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

$factory->define(peninsula\User::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'tipo_ci' => $faker->randomElement(['Venezolano', 'Extranjero', 'Menor']),
        'number_ci'=> $faker->biasedNumberBetween($min=100000, $max=25000000),
        'genero' => $faker->randomElement(['Femenino', 'Masculino']),
        'fecha_nacimiento'=>$faker->dateTimeBetween($startDate='-80 years', $endDate='now'),
        'email' => $faker->safeEmail,
        'telf_casa'=> $faker->phoneNumber,
        'telf_movil'=> $faker->phoneNumber,
        'telf_trabajo'=> $faker->phoneNumber,
        'profesion' => $faker->jobTitle,
        'habitantes_casa' => $faker->numberBetween(1, 10),
        'tipo_usuario' => $faker->randomElement(['Administrador', 'Usuario']),
        'lugar_edificio' => strtoupper($faker->randomLetter),
        'lugar_apartamento' => $faker->numberBetween(11, 44),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
