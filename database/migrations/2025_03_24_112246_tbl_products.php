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
        //
        Schema::create('tbl_products', function (Blueprint $table) {
           $table->id();
           $table->string('name');
           $table->string('description')->nullable();
           $table->string('image_name')->nullable();
           $table->string('product_type')->nullable();
           $table->string('pax')->nullable();
           $table->string('price')->nullable();
           $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tbl_products');
    }
};
