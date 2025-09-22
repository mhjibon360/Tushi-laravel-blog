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

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('author_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('tag_id')->nullable();
            $table->mediumText('title')->nullable();
            $table->mediumText('slug')->nullable();
            $table->longText('details')->nullable();
            $table->mediumText('thumbnail')->nullable();
            $table->string('featured')->default(0);
            $table->string('post_of_the_month')->default(0);
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
