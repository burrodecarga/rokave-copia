<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominios', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('condominio');
                $table->string('rut');
                $table->string('direccion');
                $table->string('telefonos');
                $table->string('correo');
                $table->string('twitter')->nullable();
                $table->string('facebook')->nullable();
                $table->string('instagram')->nullable();
                $table->string('logo')->nullable();
                $table->decimal('interes',8,2)->default(0);
                $table->bigInteger('user_id')->unsigned();
                $table->string('administrador')->nullable();
                $table->foreign('user_id')->references('id')->on('users');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condominios');
    }
}
