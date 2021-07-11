<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->float('precio');
            $table->date('fecha_vencimiento');
            $table->integer('stock_min');
            $table->integer('stock_max');

            $table->unsignedBigInteger('rubro_id')->nullable();
            
            $table->foreign('rubro_id')->references('id')->on('rubros')->onDelete('set null');
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
        Schema::dropIfExists('articulos');
    }
}
