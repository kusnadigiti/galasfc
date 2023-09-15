<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'tgl',
        'total',
        'id_plgn',
       
    ];
    

    use HasFactory;
    public function pelanggan()
    {
        return $this->belongsTo('App\Models\pelanggan','id_plgn'); //path model pelanggan+id_plgn
    }

    public function penjualan_details()
    {
        return $this->hasMany(Penjualan_detail::class);
    }
}
