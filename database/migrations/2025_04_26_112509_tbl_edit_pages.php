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
        Schema::create('tbl_edit_pages', function (Blueprint $table) {
            $table->id();
            $table->string('section_part');
            $table->string('section_sub_part');
            $table->string('section_type');
            $table->longtext('section_text');
            $table->string('section_image');
            $table->string('section_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_edit_pages');
    }
};
