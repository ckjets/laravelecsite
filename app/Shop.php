<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';
    public $primarykey =  '$id';
    public $timestamp = true;

    public function cart() {
        return $this->hasmany('App\Cart');
    }
}
