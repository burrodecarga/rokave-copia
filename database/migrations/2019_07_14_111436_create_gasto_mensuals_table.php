<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastoMensualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastosmensuales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ano')->unsigned();
            $table->bigInteger('mes')->unsigned();
            $table->bigInteger('condominio_id')->unsigned();
            $table->string('condominio')->nullable();
            $table->double('gastoOrdinario',10,2);
            $table->double('gastoExtraOrdinario',10,2);
            $table->double('reserva',10,2);
            $table->double('gastoTotal',10,2);
            $table->text('descripcion');
            $table->bigInteger('publicado')->unsigned();
            $table->bigInteger('facturado')->unsigned();
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
        Schema::dropIfExists('gastosmensuales');
    }
}
