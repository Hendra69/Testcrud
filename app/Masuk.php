<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    protected $fillable = ['jenis_kendaraan', 'nomor_polisi', 'tgl'];
}
