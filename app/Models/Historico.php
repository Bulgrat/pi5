<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jogo_id'
    ];

    public function jogo(){
        return $this->belongsTo(Jogo::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
