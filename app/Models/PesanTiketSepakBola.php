<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanTiketSepakBola extends Model
{
    use HasFactory;

    protected $table = 'pesan_tiket_sepak_bolas';
    
    protected $fillable = [
        'id_tiket_sepak_bola',
        'id_pengguna',
        'tanggal_pesan',
        'jumlah_pesan',
    ];
    
    public function tiket_sepak_bola()
    {
        return $this->belongsTo(TiketSepakBola::class, 'id_tiket_futsal');
    }
    
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
