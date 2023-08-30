<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model TalentFisik -c
     * Happy Coding :)
     */
    public function up()
    {
        Schema::create('talent_fisik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('talent_id');
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('warna_kulit')->nullable();
            $table->string('warna_rambut')->nullable();
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
        Schema::dropIfExists('talent_fisik');
    }
};
