<?php

use Illuminate\Database\Seeder;
use App\Movimiento;

class MovimientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movimiento::class,3000)->create();
    }
}
