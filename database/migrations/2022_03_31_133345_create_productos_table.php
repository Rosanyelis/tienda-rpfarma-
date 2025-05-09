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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->usingnedBigInteger('categoria_id')->nullable();
            $table->foreignId('condicion_venta_id')->nullable();
            $table->foreignId('forma_farmaceutica_id')->nullable();
            $table->foreignId('tipo_administracion_id')->nullable();
            $table->foreignId('laboratorio_id')->nullable();
            $table->string('sku');
            $table->string('name');
            $table->text('foto')->nullable();
            $table->string('stock');
            $table->integer('precio_venta');
            $table->text('informacion')->nullable();
            $table->string('registro_sanitario')->nullable();
            $table->string('precio_fraccionario')->nullable();
            $table->text('dosis_farmaceutica')->nullable();
            $table->text('indicaciones')->nullable();
            $table->text('advertencias')->nullable();
            $table->text('condiciones_almacenamiento')->nullable();
            $table->string('estatus');

            $table->timestamps();

            $table->foreignId('categoria_id')
                    ->constrained('categorias')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('condicion_venta_id')
                    ->constrained('condicion_ventas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('forma_farmaceutica_id')
                    ->constrained('forma_farmaceuticas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('tipo_administracion_id')
                    ->constrained('tipo_administracions')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('laboratorio_id')
                    ->constrained('laboratorio')
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
