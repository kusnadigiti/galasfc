<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan_detail extends Model
{
    use HasFactory;
    public function barang()
    {
        return $this->belongsTo ('App\Models\barang','id_plgn');
    }
    public function penjualan()
    {
        return $this->belongsTo ('App\Models\penjualan','id_plgn');
    }
}
