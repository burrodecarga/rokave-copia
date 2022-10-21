<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->enum('tipo', ['ingreso', 'egreso']);
            $table->enum('condicion', ['por confirmar', 'confirmado','anulado']);
            $table->string('origen')->nullable();
            $table->double('monto', 12, 2);
            $table->string('referencia', 100);
            $table->longText('descripcion');
            $table->integer('condominio_id')->unsigned();
            $table->string('condominio')->nullable();
            $table->string('apartamento')->nullable();
            $table->string('banco')->nullable();
            $table->string('cuenta')->nullable();
            $table->integer('apartamento_id')->unsigned();
            $table->bigInteger('banco_id')->unsigned();
            $table->foreign('banco_id')->references('id')->on('bancos')->onDelete('cascade');
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
        Schema::dropIfExists('movimientos');
    }
}
