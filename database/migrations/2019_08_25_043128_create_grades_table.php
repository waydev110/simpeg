<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('kode_pangkat');
            $table->string('golongan')->length(5);
            $table->string('pangkat')->length(10);
            $table->integer('masa_kerja_golongan')->length(2)->unsigned();
            $table->date('tmt_pangkat')->length(0);
            $table->string('no_sk')->length(15);
            $table->string('unit_kerja')->length(10);
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
        Schema::dropIfExists('grades');
    }
}
