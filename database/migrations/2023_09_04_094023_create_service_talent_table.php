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
        Schema::create('service_talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('service_code')->nullable();
            // $table->text('service_sort')->nullable();
            // $table->text('service_kind')->nullable();
            $table->enum('service_sort' ,['Online Dating','Offline Dating'])->default('Online Dating');
            $table->enum('service_kind' ,['Main Service','Additional Service'])->default('Main Service');
            $table->text('service_name')->nullable();
            $table->text('duration')->nullable();
            $table->integer('price_service')->nullable()->unsigned();
            $table->text('description')->nullable();
            $table->integer('point')->nullable()->unsigned();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_talent');
    }
};
