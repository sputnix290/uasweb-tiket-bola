<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimAway extends Model
{
    use HasFactory;

    protected $table = 'tim_aways';
    
    protected $fillable = [
        'nama_tim_away',
    ];
}
