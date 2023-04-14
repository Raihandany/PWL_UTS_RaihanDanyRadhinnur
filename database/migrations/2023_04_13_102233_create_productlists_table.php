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
        Schema::create('productlist', function (Blueprint $table) {
            //$table->id('id_product');
            $table->string('code_product')->unique();
            $table->string('name_product');
            $table->string('category_product');
            $table->integer('price_product');
            $table->integer('stoq_product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productlist');
    }
};
