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
        Schema::create('meter_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_device');
            $table->foreign(['id_device'],'id_device_meter_log_fkey')->references('id_dev')->on('device');
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
        Schema::dropIfExists('meter_log');
    }
};
