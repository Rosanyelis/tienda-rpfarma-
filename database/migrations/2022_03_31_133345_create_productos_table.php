<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('categoria_id');
            $table->string('sku');
            $table->string('name');
            $table->string('informacion');
            $table->string('foto');
            $table->string('stock');
            $table->decimal('precio_venta', 12, 2);
            $table->string('estatus');
            $table->timestamps();

            $table->foreign('categoria_id')
                    ->references('id')
                    ->on('categorias')
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
        Schema::dropIfExists('productos');
    }
}
