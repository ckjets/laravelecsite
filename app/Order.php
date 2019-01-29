<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
   protected $fillable=['total','delivered','user_id'];
   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function orderItems()
   {
       return $this->belongsToMany(Product::class)->withPivot('pty','total');
   }

   public static function createOrder()
   {
    $user=Auth::user();
    $order=$user->orders()->create([
        'total'=>Cart::total(),
        'delivered'=>0
    ]);

    $cartItems=Cart::content();
    foreach ($cartItems as $cartItem){
        $order->orderItems()->attach($cartItem->id,[
            'qty'=>$cartItem->qty,
            'total'=>$cartItem->qty*$cartItem->price
        ]);
   }
}
}