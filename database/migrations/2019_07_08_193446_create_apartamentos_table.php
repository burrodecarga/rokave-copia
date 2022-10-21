<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('condominio_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('condominio');
            $table->string('apartamento');
            $table->string('propietario');
            $table->string('rut');
            $table->string('direccion');
            $table->string('telefonos');
            $table->string('correo');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('avatar')->nullable();
            $table->decimal('alicuota', 8,6)->default(0.1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('condominio_id')->references('id')->on('condominios')->onDelete('cascade');
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
        Schema::dropIfExists('apartamentos');
    }
}
