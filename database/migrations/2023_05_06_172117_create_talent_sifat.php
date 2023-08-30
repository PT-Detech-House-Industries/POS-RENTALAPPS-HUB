<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model TalentSifat -c
     * Happy Coding :)
     */
    public function up()
    {
        Schema::create('talent_sifat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('talent_id');
            $table->string('deskripsi_sifat')->nullable();
            $table->enum('status_sifat',['positif','negatif']);
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
        Schema::dropIfExists('talent_sifat');
    }
};
