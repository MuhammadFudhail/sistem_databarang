<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Penjualan extends Model
{
    use HasFactory;
    protected $fillable=[
        "product_id",
        "pelanggan_id",
        "jumlah",
        "total_harga",
        "tanggal_penjualan",
    ];

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }


}
