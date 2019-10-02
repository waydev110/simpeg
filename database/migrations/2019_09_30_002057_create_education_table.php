<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {

            $table->bigIncrements('kode_pendidikan');
            $table->string('prodi')->length(50);
            $table->string('jenjang')->length(2);
            $table->string('asal_sekolah')->length(15);
            $table->date('tahun_lulus')->length(0);
            $table->string('nik')->length(15);

            $table->foreign('nik')->references('nik')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
