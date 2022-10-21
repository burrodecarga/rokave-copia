<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\shinobi\models\Role;
use Caffeinated\shinobi\models\Permission;

class SetUpTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=Auth::loginUsingId(1)
                    ->assignRoles('master');
        $user=Auth::loginUsingId(2)
                    ->assignRoles('admin');
        //


    }
}
