<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model TalentAkunPembayaran -c
     * Happy Coding :)
     */
    public function up()
    {
        Schema::create('talent_akun_pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('talent_id');
            $table->string('nama_bank')->nullable();
            $table->string('nama_e-wallet')->nullable();
            $table->string('nomor_bank')->nullable();
            $table->string('nomor_e-wallet')->nullable();
            $table->string('nama_pemilik_bank')->nullable();
            $table->string('nama_pemilik_e-wallet')->nullable();
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
        Schema::dropIfExists('talent_akun_pembayaran');
    }
};
