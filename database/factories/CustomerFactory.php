<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '5ebe2294ecd0e0f08eab7690d2a6ee69', // secret
        'api_token'=>bin2hex(openssl_random_pseudo_bytes(30)),
    ];
});
