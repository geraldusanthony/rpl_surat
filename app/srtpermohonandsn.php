<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class srtpermohonandsn extends Model 
{
    protected $table = 'srtpermohonandsn';
    protected $primarykey = 'id';
    protected $fillable = ['tgl_pelaksanaan','lksi_kgt','nm_mitra','ket']; 
}
