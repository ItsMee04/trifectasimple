<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuplierModel extends Model
{
    use HasFactory;
    protected $table = 'suplier';
    protected $fillable = [
        'id',
        'namasuplier',
        'alamatsuplier',
        'kontaksuplier',
        'status'
    ];
}
