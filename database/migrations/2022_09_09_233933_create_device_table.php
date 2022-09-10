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
        Schema::create('device', function (Blueprint $table) {
            $table->id('id_dev');
            $table->string('nama', 200)->nullable();
            $table->string('alamat',200)->nullable();
            $table->string('gol', 10)->nullable();
            $table->integer('m_cutOff')->nullable();
            $table->string('lat',100)->nullable();
            $table->string('lang',100)->nullable();
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
        Schema::dropIfExists('device');
    }
};
