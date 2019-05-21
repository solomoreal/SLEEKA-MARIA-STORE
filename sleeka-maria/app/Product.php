<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['image_url', 'price','shipment_price','side_url','front_url', 'description', 'product_name','category_id','colour_id'];


    public function category(){
        return $this->belongsTo('App\Category');
    }

}
