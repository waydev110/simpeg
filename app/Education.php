<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    protected $primaryKey = 'kode_pendidikan';

    protected $fillable = ['kode_pendidikan','prodi','jenjang','asal_sekolah','tahun_lulus','nik'];

    public $timestamps = false;

    public function Employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
