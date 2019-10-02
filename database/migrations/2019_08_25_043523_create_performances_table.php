<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->bigIncrements('kode_kinerja');
            $table->integer('jumlah_presensi')->length(2)->unsigned();
            $table->integer('jumlah_ijin')->length(2)->unsigned();
            $table->integer('jumlah_absen')->length(2)->unsigned();
            $table->integer('kelebihan_jam_kerja')->length(2)->unsigned();
            $table->string('kesimpulan')->length(15);
            $table->string('tunj_kinerja')->length(15);
            $table->integer('tahun')->length(4)->unsigned();
            $table->integer('bulan')->length(2)->unsigned();
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
        Schema::dropIfExists('performances');
    }
}
