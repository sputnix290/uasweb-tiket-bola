<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketSepakBola extends Model
{
    use HasFactory;

    protected $table = 'tiket_sepak_bolas';
    
    protected $fillable = [
        'id_jadwal_sepak_bola',
        'kategori_tiket',
        'harga_tiket',
    ];
    
    public function Jadwal_Sepak_bola()
    {
        return $this->belongsTo(JadwalSepakBola::class, 'id_jadwal_sepak_bola');
    }
}
