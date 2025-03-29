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
        Schema::create('tbl_feedback_scores', function (Blueprint $table) {
             $table->id();
            $table->string('feedback_id');
            $table->string('score')->nullable();
            $table->string('other_comments')->nullable();
            $table->string('sentimental')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tbl_feedback_scores');
    }
};
