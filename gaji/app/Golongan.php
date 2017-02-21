<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    //
    protected $table = 'golongans';
    protected $fillable = array('kode_golongan','nama_golongan','besaran_uang');
    protected $visible = array('kode_golongan','nama_golongan','besaran_uang');

      public function pegawai()
    {
    	return $this->hasMany('App\Pegawai','golongan_id');
    }
}
