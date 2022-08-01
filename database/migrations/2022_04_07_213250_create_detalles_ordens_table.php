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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('orden_id');
            $table->foreignId('producto_id');
            $table->string('sku');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->timestamps();

            $table->foreignId('orden_id')
                    ->constrained('ordenes')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            
            $table->foreignId('producto_id')
                    ->constrained('productos')
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
