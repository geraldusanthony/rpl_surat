<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beritaacaramhs extends Model
{
    protected $table = 'beritaacaramhs';
    protected $primarykey = 'id';
    protected $fillable = ['anggota','tgl_pelaksanaan','lksi_kgt','nm_mitra','ket'];
}
