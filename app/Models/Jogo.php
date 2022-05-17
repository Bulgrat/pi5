<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'video',
        'desc',
        'price',
        'desc',
        'user_id',
        'categoria_id',
        'platform_id',
        'link_dowload',
        'images',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function platform(){
        return $this->belongsTo(Platform::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function historico(){
        return $this->hasMany(Historico::class);
    }
}
