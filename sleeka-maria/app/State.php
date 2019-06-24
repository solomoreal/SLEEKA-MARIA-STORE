<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
