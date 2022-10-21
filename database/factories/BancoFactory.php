<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Banco;
use Faker\Generator as Faker;

$factory->define(Banco::class, function (Faker $faker) {
    return [
        'banco'=>$faker->name,
        'cuenta'=>$faker->phoneNumber,
        'debe'=>99999.78,
        'haber'=>8899999.45,
        'saldo'=>0,
        'condominio_id'=>1,
    ];
});
