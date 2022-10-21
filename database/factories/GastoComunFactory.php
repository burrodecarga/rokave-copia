<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\GastoComun;
use Faker\Generator as Faker;

$factory->define(GastoComun::class, function (Faker $faker) {
    return [
        'condominio_id'=>1,
        'condominio'=>'Condominio 1',
        'ano'=>2019,
        'mes'=>rand(1,12),
        'tipo'=>$faker->randomElement(['extraordinario', 'ordinario:mantenimiento','ordinario:otros','ordinario:administrativo','ordinario:reparaciones']),
        'referencia'=>$faker->phoneNumber,
        'descripcion'=>$faker->sentence(40),
        'monto'=>rand(5000,10000),
        'iva'=>rand(5,8),
        'total'=>rand(8000,23000),
        'fecha'=>date('Y-m-d'),
        'fecha_de_pago'=>date('Y-m-d'),
        'forma_de_pago'=>'Cheque',
        'Referencia_de_pago'=>$faker->phoneNumber,
        'banco_id'=>rand(1,5),


    ];
});
