<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('codigo');
            $table->uuid('producto_id');
            $table->string('producto_name');
            $table->string('producto_foto');
            $table->string('urlshow');
            $table->string('producto_tipoventa');
            $table->string('cantidad');
            $table->integer('precio');
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
        Schema::dropIfExists('carritos');
    }
}
