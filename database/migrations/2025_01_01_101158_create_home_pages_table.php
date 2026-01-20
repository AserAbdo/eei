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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slider1')->nullable();
            $table->string('slider2')->nullable();
            $table->string('title');
            $table->string('description');
            $table->string('who_we_are_desc');
            $table->text('services');
            $table->string('feature1_title');
            $table->string('feature2_title');
            $table->string('feature3_title');
            $table->string('feature1_desc');
            $table->string('feature2_desc');
            $table->string('feature3_desc');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
