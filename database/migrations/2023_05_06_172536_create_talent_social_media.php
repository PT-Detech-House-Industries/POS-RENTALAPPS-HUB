<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model TalentSocialMedia -c
     * Happy Coding :)
     */
    public function up()
    {
        Schema::create('talent_social_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('talent_id');
            $table->string('whatsapp_number')->nullable();
            $table->string('telegram_number')->nullable();
            $table->string('email')->nullable();
            $table->string('instagram_account')->nullable();
            $table->string('twitter_account')->nullable();
            $table->string('tiktok_account')->nullable();
            $table->timestamps();

            $table->foreign('talent_id')
            ->references('id')->on('talent')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent_social_media');
    }
};
