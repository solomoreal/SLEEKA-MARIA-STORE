<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['image_url', 'price','shipment_price','side_url','front_url', 'description', 'product_name','category_id','quantity','subcategory_id'];


    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function sizes(){
        return $this->belongsToMany('App\Size','products_sizes');
    }

    public function colours(){
        return $this->belongsToMany('App\Colour', 'colours_products');
    }

}
