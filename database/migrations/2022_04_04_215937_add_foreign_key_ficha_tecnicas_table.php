<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFichaTecnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ficha_tecnicas', function (Blueprint $table) {
            $table->foreign('condicion_venta_id')
                    ->references('id')
                    ->on('condicion_ventas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('forma_farmaceutica_id')
                    ->references('id')
                    ->on('forma_farmaceuticas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('tipo_administracion_id')
                    ->references('id')
                    ->on('tipo_administracions')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('laboratorio_id')
                    ->references('id')
                    ->on('laboratorios')
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
        Schema::table('ficha_tecnicas', function (Blueprint $table) {
            //
        });
    }
}
