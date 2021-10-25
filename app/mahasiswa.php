<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['jenis_srt','tgl_pelaksanaan','lksi_kgt','nm_mitra','ket'];
}
