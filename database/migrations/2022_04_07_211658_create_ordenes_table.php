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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('cliente_id');
            $table->char('nro_orden');
            $table->integer('subtotal');
            $table->integer('envio');
            $table->integer('monto');
            $table->string('tipo_recepcion');
            $table->string('local')->nullable();
            $table->string('comuna')->nullable();
            $table->string('direccion_pedido')->nullable();
            $table->string('nombre_receptor')->nullable();
            $table->string('correo_receptor')->nullable();
            $table->string('telefono_receptor')->nullable();
            $table->string('motivo_rechazo')->nullable();
            $table->string('fecha_rechazo')->nullable();
            $table->string('estatus');
            $table->timestamps();

            $table->foreignId('cliente_id')
                    ->constrained('clientes')
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
