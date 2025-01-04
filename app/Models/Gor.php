<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gor extends Model
{
    use HasFactory;

    protected $table = 'gors';
    
    protected $fillable = [
        'nama_gor',
        'lokasi_gor',
        'kapasitas_gor',
    ];
}
