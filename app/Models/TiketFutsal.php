<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketFutsal extends Model
{
    use HasFactory;

    protected $table = 'tiket_futsals';
    
    protected $fillable = [
        'id_jadwal_futsal',
        'kategori_tiket',
        'harga_tiket',
    ];
    
    public function Jadwal_Futsal()
    {
        return $this->belongsTo(JadwalFutsal::class, 'id_jadwal_futsal');
    }
}
