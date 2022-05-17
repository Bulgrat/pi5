<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageJogo extends Model
{
    use HasFactory;
      
    protected $fillable = [
        'id',
        'filename'
    ];

    public function jogos(){
        return $this->belongsTo(Jogo::class);
    }
}
