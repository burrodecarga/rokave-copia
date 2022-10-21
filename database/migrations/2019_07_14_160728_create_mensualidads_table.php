<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensualidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensualidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ano')->unsigned();
            $table->bigInteger('mes')->unsigned();
            $table->bigInteger('condominio_id')->unsigned();
            $table->bigInteger('apartamento_id')->unsigned();
            $table->decimal('alicuota', 8,6)->default(0);
            $table->double('gastoComun',10,2);
            $table->double('gastoParticular',10,2);
            $table->double('reserva',10,2);
            $table->double('gastoTotal',10,2);
            $table->text('factura');
            $table->enum('condicion',['no cancelado','cancelado','moroso']);
            $table->date('fecha_de_pago');
            $table->text('forma_de_pago');
            $table->text('referencia_de_pago');
            $table->text('soporte');
            $table->bigInteger('confirmado')->unsigned();
            $table->bigInteger('pago')->unsigned();
            $table->bigInteger('gastosmensuales_id')->unsigned();
            $table->foreign('gastosmensuales_id')->references('id')->on('gastosmensuales')->onDelete('cascade');
            $table->foreign('apartamento_id')->references('id')->on('apartamentos')->onDelete('cascade');
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
        Schema::dropIfExists('mensualidades');
    }
}
