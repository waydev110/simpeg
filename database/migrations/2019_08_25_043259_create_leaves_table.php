<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->bigIncrements('kode_cuti');
            $table->string('jenis_cuti')->length(10);
            $table->date('tanggal_mulai')->length(0);
            $table->date('tanggal_akhir')->length(0);
            $table->integer('sisa_cuti')->length(2)->unsigned();
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
        Schema::dropIfExists('leaves');
    }
}
