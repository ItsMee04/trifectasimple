<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama', 'alamat', 'kontak', 'profesi', 'ttd'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
