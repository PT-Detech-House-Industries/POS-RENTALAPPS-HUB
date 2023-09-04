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
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('id');
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
        Schema::dropIfExists('client');
    }
};
