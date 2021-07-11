<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobanteCabecerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante_cabeceras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('num_comprobante');
            $table->enum('tipo_operacion', ['Compra','Venta']);
            $table->date('fecha');
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
        Schema::dropIfExists('comprobante_cabeceras');
    }
}
