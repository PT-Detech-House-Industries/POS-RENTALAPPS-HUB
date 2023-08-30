<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model TalentRating -c
     * Happy Coding :)
     */
    public function up()
    {
        Schema::create('talent_rating', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('talent_id');
            $table->string('nilai_rating')->nullable();
            $table->string('detail_review')->nullable();
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
        Schema::dropIfExists('talent_rating');
    }
};
