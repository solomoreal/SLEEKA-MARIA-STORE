<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function orders(){
        return $this->hasMany('App\Order')->latest();
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function state(){
        return $this->belongsTo('App\State');
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','first_name','last_name','phone','address','country_id','address','state_id','lga'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
