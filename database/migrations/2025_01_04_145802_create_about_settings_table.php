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
        Schema::create('about_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('hero_image');
            $table->text('who_we_are');
            $table->string('who_we_are_image')->nullable();
            $table->text('our_message');
            $table->string('our_message_image')->nullable();
            $table->text('our_vision');
            $table->string('our_vision_image')->nullable();

            $table->text('our_mission')->nullable();
            $table->string('our_mission_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_settings');
    }
};
