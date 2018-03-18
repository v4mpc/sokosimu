<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{


  protected $fillable = [
    'featuredImage1','featuredImage2','featuredImage3','featuredImage4',
    'featuredImage5',
 ];



    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function Customer()
    {
      return $this->belongsTo('App\Customer');
    }

    public function wishlist()
    {
      return $this->belongsTo('App\Product');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }

    public function getPriceAttribute($value)
    {
        return number_format($value);
    }
}
