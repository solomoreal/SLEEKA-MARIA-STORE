<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['image_url', 'price','shipment_price','side_url','front_url', 'description', 'product_name'];

    public function colours(){
        return $this->hasMany('App\Colour');
    }

}
