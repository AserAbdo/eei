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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //image file
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('gallery_category_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('gallery_category_id')->references('id')->on('media_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
