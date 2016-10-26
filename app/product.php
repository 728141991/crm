<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function opportunities(){
        return $this->belongsToMany('App/Opportunity');
    }
    function documents(){
    return $this->hasMany('App/Product');
    }
    function ticket(){
        return $this->hasMany('App/Ticket');
    }
    function contacts(){
        return $this->belongsToMany('App/Product');
    }
    function organizations(){
        return $this->belongsToMany('App/Organization');
    }
    function leads(){
        return $this->belongsToMany('App/Lead');
    }
}
