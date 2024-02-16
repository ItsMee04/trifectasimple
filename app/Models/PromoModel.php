<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoModel extends Model
{
    use HasFactory;
    protected $table = 'promo';
    protected $fillable =
    [
        'id',
        'namapromo',
        'discountpromo',
        'status'
    ];
}
