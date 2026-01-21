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
            $table->text('description')->change();
            $table->text('who_we_are_desc')->change();
            $table->text('feature1_desc')->change();
            $table->text('feature2_desc')->change();
            $table->text('feature3_desc')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_pages', function (Blueprint $table) {
            $table->string('description')->change();
            $table->string('who_we_are_desc')->change();
            $table->string('feature1_desc')->change();
            $table->string('feature2_desc')->change();
            $table->string('feature3_desc')->change();
        });
    }
};
