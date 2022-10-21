<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bancos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('banco');
        $table->string('cuenta');
        $table->decimal('debe', 10, 2)->default(0);
        $table->decimal('haber', 10, 2)->default(0);
        $table->decimal('saldo', 10, 2)->default(0);
        $table->bigInteger('condominio_id')->unsigned();
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
        Schema::dropIfExists('bancos');
    }
}
