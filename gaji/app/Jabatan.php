<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $table = 'jabatans';
    protected $fillable = array('kode_jabatan','nama_jabatan','besaran_uang','created_at','updated_at');
    protected $visible = array('kode_jabatan','nama_jabatan','besaran_uang','created_at','updated_at');
}
