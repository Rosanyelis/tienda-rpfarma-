<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_recetas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('orden_id');
            $table->text('url_receta');
            $table->timestamps();

            $table->foreign('orden_id')
                    ->references('id')
                    ->on('orden_clientes')
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
        Schema::dropIfExists('orden_recetas');
    }
}
