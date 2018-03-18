<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    

    public function products(){

        $this->hasMany('App\Product');

    }
}
