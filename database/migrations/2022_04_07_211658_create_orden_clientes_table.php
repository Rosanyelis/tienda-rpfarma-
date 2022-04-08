<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_clientes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('cliente_id');
            $table->integer('monto');
            $table->string('dirección_compras');
            $table->string('dirección_pedido');
            $table->string('estatus');
            $table->timestamps();

            $table->foreign('cliente_id')
                    ->references('id')
                    ->on('clientes')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_clientes');
    }
}
