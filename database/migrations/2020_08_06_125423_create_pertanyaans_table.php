<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('judul');
            $table->string('isi');
            $table->date('tanggal_dibuat')->nullable()->default(null);
            $table->date('tanggal_diperbaharui')->nullable()->default(null);
            $table->unsignedBigInteger('profil_id')->nullable()->default(null);

            $table->foreign('profil_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaans');
    }
}
