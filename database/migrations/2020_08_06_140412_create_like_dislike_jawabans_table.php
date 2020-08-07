<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_jawabans', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_id');
            $table->timestamps();
            $table->unsignedBigInteger('profile_id');
            $table->integer('poin');

            $table->foreign('jawaban_id')->references('id')->on('jawabans');
            $table->foreign('profile_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_jawabans');
    }
}
