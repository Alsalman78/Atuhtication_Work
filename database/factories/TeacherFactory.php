<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale ,
            'email' => $faker->companyEmail,
            'adress' => $faker->address ,
             'password' => $faker->md5('1234'),
            'country' => $faker->country ,
            'city' =>  $faker->city ,
            'Salary' => $faker->numberBetween($min=4000 , $max=12000),
            'birth_date' => $faker-> date($format = 'Y-m-d', $max = 'now'),
            'credit_card_no' => $faker->creditCardNumber 
    ];
});
