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
        Schema::table('home_pages', function (Blueprint $table) {
            $table->text('why_eei_desc');
            $table->text('why_eei_points');
            $table->string('feature1_icon');
            $table->string('feature2_icon');
            $table->string('feature3_icon');
            $table->string('who_we_are_img_first')->nullable();
            $table->string('who_we_are_img_second')->nullable();
            $table->string('why_eei_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_pages', function (Blueprint $table) {
            //
        });
    }
};
