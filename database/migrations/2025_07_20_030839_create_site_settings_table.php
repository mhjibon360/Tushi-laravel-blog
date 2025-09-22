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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('fav_icon')->nullable();
            $table->string('logo')->nullable();
            $table->string('rss_icon')->nullable();
            $table->string('rss_text')->nullable();
            $table->string('site_map_text')->nullable();
            $table->string('privacy_text')->nullable();
            $table->string('footer_text')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();

            $table->string('home_banner_title')->nullable();
            $table->string('recentpost_title')->nullable();
            $table->string('topauthor_title')->nullable();
            $table->string('featured_title')->nullable();
            $table->string('post_of_month_bg')->nullable();
            $table->string('subscribe_news_letter_title')->nullable();
            $table->string('subscribe_news_letter_details')->nullable();
            $table->string('subscribe_news_button_text')->nullable();
            $table->string('contact_us_title')->nullable();
            $table->string('contact_us_button_text')->nullable();
            $table->string('contact_us_right_heading')->nullable();
            $table->string('contact_us_right_details')->nullable();
            $table->string('contact_us_email_icon')->nullable();
            $table->string('contact_us_email_address')->nullable();
            $table->string('contact_us_phone_icon')->nullable();
            $table->string('contact_us_phone_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
