<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class srtpersonaliadsn extends Model
{
    protected $table = 'srtpersonaliadsn';
    protected $primarykey = 'id';
    protected $fillable = ['lksi_kgt','nm_mitra','ket'];
}
