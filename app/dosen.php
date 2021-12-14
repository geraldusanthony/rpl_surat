<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $primarykey = 'id';
    protected $fillable = ['tgl_pelaksanaan','lksi_kgt','nm_mitra','ket'];
}
