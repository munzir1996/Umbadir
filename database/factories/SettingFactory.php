<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        'phone' => +249912324250,
        'address' => 'الجمعية العومية ولاية الخرطوم',
        'email' => 'ohdo.org.sdn@gmail.com',
        'website' => 'umbadir',
        'counter' => 192555,
    ];
});
