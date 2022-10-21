<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\GastoParticular;
use Faker\Generator as Faker;

$factory->define(GastoParticular::class, function (Faker $faker) {
    return [
        'condominio_id'=>1,
        'apartamento_id'=>rand(1,90),
        'udv'=>'Apartamento 1',
        'ano'=>2019,
        'mes'=>rand(1,12),
        'tipo'=>$faker->randomElement(['extraordinario', 'ordinario:mantenimiento','ordinario:otros','ordinario:administrativo','ordinario:reparaciones']),
        'referencia'=>$faker->phoneNumber,
        'descripcion'=>$faker->sentence(40),
        'monto'=>rand(5000,10000),
        'iva'=>rand(5,8),
        'total'=>rand(8000,23000),
        'fecha'=>date('Y-m-d'),
        'lecturaPrevia'=>rand(500,6000),
        'lecturaActual'=>rand(500,6000),
        'lectura'=>rand(500,6000),
    ];
});
