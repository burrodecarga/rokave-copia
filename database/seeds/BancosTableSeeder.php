<?php

use Illuminate\Database\Seeder;
use App\Banco;

class BancosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Banco::class,5)->create();
    }
}
