<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetisi extends Model
{
    use HasFactory;

    protected $table = 'kompetisis';
    
    protected $fillable = [
        'nama_kompetisi',
        'tipe_kompetisi',
        'musim_kompetisi',
    ];
}
