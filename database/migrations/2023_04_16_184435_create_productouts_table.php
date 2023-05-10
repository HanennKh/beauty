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
        Schema::create('productouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoiceouts_id')->constant('invoiceouts');
            $table->foreignId('products_id')->constant('products');
            $table->integer('quantity_out');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productouts');
    }
};
