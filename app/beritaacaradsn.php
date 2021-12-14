<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beritaacaradsn extends Model
{
    protected $table = 'beritaacaradsn';
    protected $primarykey = 'id';
    protected $fillable = ['jenis_srt','tgl_pelaksanaan','lksi_kgt','nm_mitra','ket'];
}
