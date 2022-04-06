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
        Schema::create('correspondens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chatId');
            $table->unsignedBigInteger('firstId');
            $table->unsignedBigInteger('secondId');
            $table->foreign('chatId')->references('id')->on('chats');
            $table->foreign('firstId')->references('id')->on('users');
            $table->foreign('secondId')->references('id')->on('users');
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
        Schema::dropIfExists('correspondens');
    }
};
