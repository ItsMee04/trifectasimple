<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'id',
        'kodeproduk',
        'namaproduk',
        'hargaproduk',
        'keteranganproduk',
        'jenisproduk',
        'beratproduk',
        'karatproduk',
        'fotoproduk',
        'status'
    ];
}
