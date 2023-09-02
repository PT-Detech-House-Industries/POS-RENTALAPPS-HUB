<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model Talent -c
     * Happy Coding :)
     */
    public function up()
    {
        Schema::create('talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kategori_talent_id');
            $table->string('kode_id')->nullable(); // untuk kode [KT]
            $table->string('kode_nomor')->nullable(); // untuk nomor [str_pad(mt_rand(1,99999), 5, '0', STR_PAD_LEFT);]
            $table->string('nickname')->nullable();
            $table->string('slug')->nullable(); // untuk nama url
            $table->enum('status',['block','active']);
            $table->timestamps();
            // $table->integer('id_account')->unique();
            // $table->string('nickname')->nullable();
            // $table->string('photo_profile')->nullable();
            // $table->string('intro_voice')->nullable();
            // $table->decimal('rating', 3, 1)->nullable(); // rating
            // $table->string('number_wa')->nullable();
            // $table->text('short_description')->nullable(); //perkenalan singkat
            // $table->enum('status',['block','active']);
            // $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('kategori_talent_id')
            ->references('id')->on('kategori_talent')
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
        Schema::dropIfExists('talent');
    }
};
