<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'salesRepEmployeeNum'=>$faker->randomDigit
        ,
       'Name' => $faker->name,
        'LastName'=> $faker->lastName
        ,'FirstName'=> $faker->name,
        'Phone'=>$faker->randomDigit
        ,
        'Address1'=>$faker->address
        ,
        'Address2'=>$faker->address
        ,
        'City'=>$faker->city
        ,
        'State'=>$faker->state
        ,
        'PostalCode'=>$faker->randomDigit
        ,
        'Country'=>$faker->country
        ,
        'CredLimit'=>$faker->randomDigit
    ];
});
