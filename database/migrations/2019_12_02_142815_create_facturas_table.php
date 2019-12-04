<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('numero')->nullable();
            $table->enum('estado',['Creado','Entregado','Anulado'])->default('Creado');
            
            $table->date('fecha');
            $table->decimal('valor',19,2);
            $table->integer('dia');
            
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
