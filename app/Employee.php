<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'nik';

    protected $fillable = ['nik','nip','nama','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','golongan_darah','status','jumlah_anak','golongan','jabatan','masa_kerja','tmt_cpns','tmt_pns','alamat','no_telepon','e_mail'
];

    public $timestamps = false;

    public function Education(){
        return $this->hasOne('App\Education');
    }

    public function Grade(){
        return $this->hasOne('App\Grade');
    }
    public function Leaves(){
        return $this->hasMany('App\Leave');
    }
    public function Performances(){
        return $this->hasMany('App\Performance');
    }

}