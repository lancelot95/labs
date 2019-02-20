<?php

use Faker\Generator as Faker;

$factory->define(App\Services::class, function (Faker $faker) {
    return [
        'titre' => $faker->titre,
        'texte' => $faker->texte,
        'logo' =>$faker->logo,
    ];
});
