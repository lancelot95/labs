<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'contactus' => $faker->contactus,
        'texte' => $faker->texte,
        'mainoffice' =>$faker->mainoffice,
        'addresse' =>$faker->addresse,
        'phone' =>$faker->phone,
        'email' =>$faker->email,
    ];
});
