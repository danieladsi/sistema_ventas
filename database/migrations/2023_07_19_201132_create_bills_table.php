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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->char('amount', 4);
            $table->decimal('unit_price', 10,2);
            $table->decimal('discount', 10,2);
            $table->decimal('Subtotal', 10,2);
            $table->decimal('tax', 10,2);
            $table->decimal('total', 10,2);


            $table->bigInteger('customer')->unsigned();
            $table->bigInteger('product')->unsigned();
            $table->bigInteger('city')->unsigned();

            $table->foreign('customer')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('product')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('city')->references('id')->on('cities')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
