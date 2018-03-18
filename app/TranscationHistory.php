<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TranscationHistory extends Model
{
    public function products(){

        $this->hasMany('App\Product');

    }
}
