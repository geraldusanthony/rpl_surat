<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class srtpermohonanmhs extends Model 
{
    protected $table = 'srtpermohonanmhs';
    protected $primarykey = 'id';
    protected $fillable = ['tgl_pelaksanaan','lksi_kgt','nm_mitra','ket']; 
}
