<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nm_brg',
        'harga',
        'stok',
        'gambar',
       
    ];

    use HasFactory;
    public function penjualan_details()
    {
        return $this->hasMany(Penjualan_detail::class);
    }
}
