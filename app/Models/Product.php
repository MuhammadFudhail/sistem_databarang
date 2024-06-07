<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        "nama",
        "deskripsi",
        "harga",
        "stok",
        "kategori",
    ];
    public function penjualan(){
        return $this->hasMany(Penjualan::class,"product_id");
    }
    
   

}
