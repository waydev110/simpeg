<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $primaryKey = 'kode_pangkat';

    protected $fillable = ['nik','golongan','pangkat','masa_kerja_golongan','tmt_pangkat','no_sk','unit_kerja'
];
    public $timestamps = false;

    public function Employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
