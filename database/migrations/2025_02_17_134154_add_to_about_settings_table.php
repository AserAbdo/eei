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
        Schema::table('about_settings', function (Blueprint $table) {
            $table->string('our_vision_image2')->nullable();
            $table->unsignedBigInteger('gallery_value_id')->nullable();

            $table->foreign('gallery_value_id')->references('id')->on('media_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_settings', function (Blueprint $table) {
            //
        });
    }
};
