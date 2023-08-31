<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->char('cantidad', 4);
            $table->decimal('precio_unitario', 10,2);
            $table->decimal('descuento', 10,2);
            $table->decimal('subtotal', 10,2);
            $table->decimal('impuesto', 10,2);
            $table->decimal('total', 10,2);


            $table->bigInteger('cliente')->unsigned();
            $table->bigInteger('producto')->unsigned();
            $table->bigInteger('ciudad')->unsigned();

            $table->foreign('cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('producto')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('ciudad')->references('id')->on('ciudad')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
