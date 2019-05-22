<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories(){
        return $this->hasMany('App\Subcategory');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function sizes(){
        return $this->hasMany('App\Size');
    }
}
