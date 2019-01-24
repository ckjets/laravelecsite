<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    public $primarykey =  '$id';
    public $timestamp = true;

    public function shop() {
        return $this->belongsto('App\Shop');
    }
    public function user() {
        return $this->belongsto('App\User');
    }

}
