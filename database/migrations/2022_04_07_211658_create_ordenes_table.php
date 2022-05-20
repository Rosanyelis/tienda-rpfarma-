<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('cliente_id');
            $table->char('nro_orden');
            $table->integer('subtotal');
            $table->integer('envio');
            $table->integer('monto');
            $table->string('tipo_recepcion');
            $table->string('local')->nullable();
            $table->string('comuna')->nullable();
            $table->string('direccion_pedido')->nullable();
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
