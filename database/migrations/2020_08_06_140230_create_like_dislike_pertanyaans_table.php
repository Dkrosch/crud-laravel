<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_pertanyaans', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id');
            $table->timestamps();
            $table->unsignedBigInteger('profil_id');
            $table->integer('poin');

            $table->foreign('profil_id')->references('id')->on('users');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_pertanyaans');
    }
}
