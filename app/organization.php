<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function user(){
        return $this->belongsTo('App\User','assign_to','id');
    }
    public function activities(){
        return $this->hasMany('App\Activity');
    }
    public function contacts(){
        return $this->hasMany('App\Contact');
    }
    public function opportunities(){
        return $this->hasMany('App\Opportunity');
    }
    public function campaigns(){
        return $this->hasMany('App\Campaign');
    }
    public function documents(){
        return $this->hasMany('App\Document');
    }
    public function tickets(){
        return $this->hasMany('App\Ticket');
    }
    public function products(){
        return $this->hasMany('App\Product');
    }
}
