<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalFutsal extends Model
{
    use HasFactory;
    
    protected $table = 'jadwal_futsals';
    
    protected $fillable = [
        'id_tim_home',
        'id_tim_away',
        'id_kompetisi',
        'tanggal',
        'waktu_mulai',
        'id_gor',
    ];
    
    public function Tim_Home()
    {
        return $this->belongsTo(TimHome::class, 'id_tim_home');
    }
    
    public function Tim_Away()
    {
        return $this->belongsTo(TimAway::class, 'id_tim_away');
    }
    
    public function Kompetisi()
    {
        return $this->belongsTo(Kompetisi::class, 'id_kompetisi');
    }
    
    public function Gor()
    {
        return $this->belongsTo(Gor::class, 'id_gor');
    }
}
