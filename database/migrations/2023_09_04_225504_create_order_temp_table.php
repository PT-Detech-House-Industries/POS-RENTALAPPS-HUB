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
        Schema::create('order_temp', function (Blueprint $table) {
            // Tabel temporders ini kita umpamakan sebagai keranjang belanja yang menjadi tempat
            // untuk menyimpan sementara data menu yang dipilih oleh pembeli/customer.

            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('servicetalent_id');
            $table->unsignedBigInteger('talent_id');
            $table->integer('price_service')->nullable()->unsigned();
            $table->integer('qty_service')->nullable()->unsigned();
            $table->date('start_service')->nullable();
            $table->date('end_service')->nullable();
            $table->integer('subtotal_service')->nullable()->unsigned();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('talent_id')
            ->references('id')->on('talent')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('client_id')
            ->references('id')->on('talent')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('servicetalent_id')
            ->references('id')->on('service_talent')
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
        Schema::dropIfExists('order_temp');
    }
};
