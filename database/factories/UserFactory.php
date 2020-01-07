<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Depart;
use App\Main;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Depart::class, function (Faker $faker) {
    return [
        'depart_number' => $faker->unique()->numberBetween(1,10),
        'name' => $faker->name,
        'dep_head' => $faker->name,
        'fin_responsible' => $faker->name,

    ];
});
$factory->define(Main::class, function (Faker $faker) {
        $q = Depart::all();
        foreach ($q as $dep_num) {
            return [
                'depart' => random_int(1,$dep_num->depart_number),
                'inv_num' => $faker->numberBetween(10000,90999990),
                'name' => random(1,$dep_num->name),
                'accepted' => $r = $faker->numberBetween(1,100),
                'written_off' => ($faker->numberBetween(1, 100) < $r ),
                'cost' => $faker->numberBetween(100.01, 10000),

            ];
        }
});
