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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('time_arrival')->nullable();
            $table->string('province_code')->nullable();
            $table->string('town_code')->nullable();
            $table->string('barangay_code')->nullable();
            $table->string('contact');
            $table->string('email');
            $table->text('address');
            $table->string('table')->unique();  // No foreign key, just a string or integer for table identifier
            $table->string('pax')->nullable();
            $table->string('payment_method')->nullable();
            $table->timestamp('schedule');
            // $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
