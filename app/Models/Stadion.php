<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadion extends Model
{
    use HasFactory;

    protected $table = 'stadions';
    
    protected $fillable = [
        'nama_stadion',
        'lokasi_stadion',
        'kapasitas_stadion',
    ];
}
