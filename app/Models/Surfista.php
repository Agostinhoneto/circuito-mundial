<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surfista extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'nome',
        'pais',
    ];

    public function bateria()
    {
        return $this->belongsTo(Bateria::class);
    }
}