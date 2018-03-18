<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $hidden = ['password','wishlists','products'];
  
   

    public function products(){


       return $this->hasMany('App\Product');
    }

    public function transctionHistories(){


       return $this->hasMany('App\TranscationHistory');
    }

    public function wishlists(){


       return $this->hasMany('App\Wishlist');
    }

    


}
