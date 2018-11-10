<?php
use Faker\Generator as Faker;
$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker -> randomElement(['Ford','Honda','Toyota']),
        'Model' => $faker -> randomElement(['Fusion', 'Corolla', 'Camry', 'Accord' ]),
        'Year' => $faker -> randomElement(['2009', '2006', '2007', '2009', '2018', '2019']),
    ];
});