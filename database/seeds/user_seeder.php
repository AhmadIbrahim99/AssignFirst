<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* for($i=0;$i<10;$i++){
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) .$i. '@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }*/
/*
        define(App\Admin::class, function (Faker\Generator $faker) {
            return factory(App\User::class)->raw([
                // ...
            ]);
        });*/
       /* factory(App\User::class,10)->create;*/

        $users = factory(App\User::class, 3)->create();
        return $users;

    }
}

