<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Next Step.
     * php artisan make:model TalentBiodata -c
     * Happy Coding :)
     */
    public function up()
    {
        Schema::create('talent_biodata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('talent_id');
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('kel_desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('kewarganegaraan')->nullable();
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
        Schema::dropIfExists('talent_biodata');
    }
};
