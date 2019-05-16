<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    public function product(){
        $this->belongsTo('App\Product');
    }
}
