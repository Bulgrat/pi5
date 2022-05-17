<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jogo_id',
        'quantity'
    ];

    public function jogo(){
        return $this->belongsTo(Jogo::class);
    }

    public function jogos()
    {
        return Jogo::where('id', '=', $this->jogo_id)->first();
    }

    public static function count()
    {
        $cart =  Cart::where('user_id', '=', Auth()->user()->id)->get();
        $total = 0;
        foreach ($cart  as $item) {
            $total += $item->quantity;
        }
        return $total;
    }

    public static function totalValue()
    {
        $cart =  Cart::where('user_id', '=', Auth()->user()->id)->get();
        $total = 0;
        foreach ($cart  as $item) {
            $total += $item->product()->price * $item->quantity;
        }
        return $total;
    }
}
