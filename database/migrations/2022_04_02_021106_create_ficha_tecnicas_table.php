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
            $table->uuid('condicion_venta_id')->nullable();
            $table->uuid('forma_farmaceutica_id')->nullable();
            $table->uuid('tipo_administracion_id')->nullable();
            $table->uuid('laboratorio_id')->nullable();
            $table->text('principio_activo')->nullable();
            $table->text('excipiente')->nullable();
            $table->text('dosis_farmaceutica')->nullable();
            $table->text('condiciones_almacenamiento')->nullable();
            $table->string('registro_sanitario')->nullable();
            $table->string('precio_fraccionario')->nullable();
            $table->text('posologia')->nullable();
            $table->text('indicaciones')->nullable();
            $table->text('sobredosis')->nullable();
            $table->text('advertencias')->nullable();
            $table->text('contraindicaciones')->nullable();
            $table->text('interacciones')->nullable();
            $table->string('estatus');
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
