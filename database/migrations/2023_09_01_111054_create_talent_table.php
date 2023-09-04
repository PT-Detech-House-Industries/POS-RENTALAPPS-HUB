<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('user_id');
            // $table->string('kode_id')->nullable(); // untuk kode [KT]
            // $table->string('kode_nomor')->nullable(); // untuk nomor [str_pad(mt_rand(1,99999), 5, '0', STR_PAD_LEFT);]
            // $table->string('nickname')->nullable();
            // $table->string('slug')->nullable(); // untuk nama url
            // $table->enum('status',['block','active']);
            // $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('gender')->nullable(); // Gender column as nullable
            $table->string('fullname')->nullable(); // Nickname column as nullable
            $table->string('nick_name')->nullable(); // Nickname column as nullable (alternative name)
            $table->date('birthday')->nullable(); // Birthday column as nullable
            $table->string('phone')->nullable(); // Phone column as nullable
            $table->string('profile_picture')->nullable(); // Profile picture column as nullable
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();


            $table->foreign('user_id')
            ->references('id')->on('users')
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
