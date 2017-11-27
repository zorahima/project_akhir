<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanans';
public $fillable = ['name', 'email', 'bulan_mulai'];
}
