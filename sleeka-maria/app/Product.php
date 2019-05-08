<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['image_url', 'price','shipment_price', 'description', 'product_name'];
}
