<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
/*
        'reportsTo' => $faker->randomDigit,
        'LastName'=> $faker->address
        ,'FirstName'=> $faker->address,
        'Extension'=>$faker->state
        ,
        'Email'=>$faker->country
        ,
        'JobTitle'=>$faker->randomDigit*/

    ];
});
