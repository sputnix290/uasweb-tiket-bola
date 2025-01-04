<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanTiketFutsal extends Model
{
    use HasFactory;

    protected $table = 'pesan_tiket_futsals';
    
    protected $fillable = [
        'id_tiket_futsal',
        'id_pengguna',
        'tanggal_pesan',
        'jumlah_pesan',
    ];
    
    public function Tiket_Futsal()
    {
        return $this->belongsTo(TiketFutsal::class, 'id_tiket_futsal');
    }
    
    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
