<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class srtpersonaliamhs extends Model
{
    protected $table = 'srtpersonaliamhs';
    protected $primarykey = 'id';
    protected $fillable = ['lksi_kgt','nm_mitra','ket'];
}
