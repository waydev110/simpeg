<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $primaryKey = 'kode_kinerja';

    protected $fillable = ['jumlah_presensi','jumlah_ijin','jumlah_absen','kelebihan_jam_kerja','kesimpulan','tunj_kinerja','nik'
];
    public $timestamps = false;

    public function Employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
