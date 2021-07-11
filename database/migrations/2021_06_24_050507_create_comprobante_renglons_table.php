<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobanteRenglonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante_renglons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comprobanteCabecera_id')->nullable();
            $table->foreign('comprobanteCabecera_id')->references('id')->on('comprobante_cabeceras')->onDelete('set null');
            $table->unsignedBigInteger('articulo_id')->nullable();
            $table->foreign('articulo_id')->references('id')->on('articulos')->onDelete('set null');
            $table->integer('cantidad');
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
        Schema::dropIfExists('comprobante_renglons');
    }
}
