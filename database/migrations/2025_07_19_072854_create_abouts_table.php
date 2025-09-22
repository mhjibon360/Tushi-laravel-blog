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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->string('heading')->nullable();
            $table->string('image')->nullable();
            $table->string('big_heading')->nullable();
            $table->longText('details')->nullable();
            $table->string('story_icon')->nullable();
            $table->string('story_heading')->nullable();
            $table->string('story_details_left')->nullable();
            $table->string('story_details_right')->nullable();
            $table->string('short')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
