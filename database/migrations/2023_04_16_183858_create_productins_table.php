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
        Schema::create('productins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoiceins_id')->constant('invoiceins');
            $table->foreignId('products_id')->constant('products');
            $table->integer('quantity_in');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productins');
    }
};
