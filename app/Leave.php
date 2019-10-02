<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $primaryKey = 'kode_cuti';

    protected $fillable = ['jenis_cuti','tanggal_mulai','tanggal_akhir','sisa_cuti','nik'
];
    public $timestamps = false;

    public function Employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
