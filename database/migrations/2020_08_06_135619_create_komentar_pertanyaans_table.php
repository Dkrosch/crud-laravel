<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarPertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_pertanyaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('isi');
            $table->date('tanggal_dibuat')->nullable()->default(null);
            $table->unsignedBigInteger('pertanyaan_id')->nullable()->default(null);;
            $table->unsignedBigInteger('profil_id')->nullable()->default(null);;

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
        Schema::dropIfExists('komentar_pertanyaans');
    }
}
