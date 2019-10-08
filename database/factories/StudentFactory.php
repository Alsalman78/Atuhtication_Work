<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
            'name' => $faker->firstNameMale ,
            'email' => $faker->companyEmail,
            'password' => md5('123456'),
            'role' => $faker-> randomElement($array = array ('Admin','Student','teacher')),
            'adress' => $faker->address ,
            'country' => $faker->country ,
            'city' =>  $faker->city ,
            'Roll_no' => $faker->randomDigitNotNull  ,
            'birth_date' => $faker-> date($format = 'Y-m-d', $max = 'now'),
            'credit_card_no' => $faker->creditCardNumber 
    ];
});
