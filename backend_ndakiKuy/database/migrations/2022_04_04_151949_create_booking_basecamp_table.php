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
        Schema::create('bookingBasecamp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_user');
            $table->foreignId('id_basecamp');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_basecamp')->references('id')->on('basecamp');
            $table->date('tglPendakian');
            $table->string('basecampTujuan');
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
        Schema::dropIfExists('bookingBasecamp');
    }
};
