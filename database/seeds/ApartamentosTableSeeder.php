<?php

use Illuminate\Database\Seeder;
use App\Apartamento;

class ApartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Apartamento::class,100)->create();
    }
}
