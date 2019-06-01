<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }  
    
    public function products(){
        return $this->belongsToMany('App\Product','products_sizes');
    }
}