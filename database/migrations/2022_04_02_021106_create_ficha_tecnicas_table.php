<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTecnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_tecnicas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('producto_id');
            $table->string('principio_activo');
            $table->string('forma_farmaceutica');
            $table->string('condiciones_almacenamiento');
            $table->string('registro_sanitario');
            $table->string('condicion_venta');
            $table->string('indicaciones');
            $table->string('advertencias');
            $table->string('contraindicaciones');
            $table->timestamps();

            $table->foreign('producto_id')
                    ->references('id')
                    ->on('productos')
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
        Schema::dropIfExists('ficha_tecnicas');
    }
}
