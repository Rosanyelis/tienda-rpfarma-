<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReclamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reclamos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignId('reclamo_id')->nullable();
            $table->foreignId('solicitud_id')->nullable();
            $table->foreignId('cliente_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->text('mensaje');
            $table->timestamps();

            $table->foreignId('reclamo_id')
                    ->constrained('reclamos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('solicitud_id')
                    ->constrained('registro_cotizacion')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('cliente_id')
                    ->constrained('clientes')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                    
            $table->foreignId('user_id')
                    ->constrained('users')
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
        Schema::dropIfExists('user_reclamos');
    }
}
