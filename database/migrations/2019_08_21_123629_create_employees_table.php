<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('nik')->length(15);
            $table->string('nip')->length(18);
            $table->string('nama')->length(50);
            $table->string('tempat_lahir')->length(25);
            $table->date('tanggal_lahir')->length(0);
            $table->string('jenis_kelamin')->length(10);
            $table->string('agama')->length(7);
            $table->string('golongan_darah')->length(2);
            $table->string('status')->length(10);
            $table->integer('jumlah_anak')->length(2)->unsigned();
            $table->string('golongan')->length(5);
            $table->string('jabatan')->length(15);
            $table->integer('masa_kerja')->length(3)->unsigned();
            $table->date('tmt_cpns')->length(0);
            $table->date('tmt_pns')->length(0);
            $table->string('alamat')->length(50);
            $table->string('no_telepon')->length(12);
            $table->string('e_mail')->length(50);

            $table->primary('nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
