<?php

use Illuminate\Database\Seeder;
use App\Condominio;

class CondominiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Condominio::class,10)->create();
    }
}
