<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_ordens', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('orden_id');
            $table->uuid('productor_id');
            $table->string('sku');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->string('url_receta');
            $table->timestamps();

            $table->foreign('orden_id')
                    ->references('id')
                    ->on('orden_clientes')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('productor_id')
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
        Schema::dropIfExists('detalles_ordens');
    }
}
