<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    function activities(){
        return $this->hasMany('App\Activity');
    }
    function contacts(){
        return $this->hasMany('App\Contact','organizationId','id');
    }
    function opportunities(){
        return $this->hasMany('App\Opportunity');
    }
    function campaigns(){
        return $this->hasMany('App\Campaign');
    }
    function documents(){
        return $this->hasMany('App\Document');
    }
    function tickets(){
        return $this->hasMany('App\Ticket');
    }
    function products(){
        return $this->hasMany('App\Product');
    }
}
