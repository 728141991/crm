<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function activities(){
        return $this->hasMany('App\Activity');
    }
    public function opportunities(){
        return $this->hasMany('App\Opportunity');
    }
    public function campaign(){
        return $this->hasMany('App\Campaign');
    }
    function documents(){
        return $this->hasMany('App\Document');
    }
    public function tickets(){
        return $this->hasMany('App\Ticket');
    }
    public function products(){
        return $this->belongsToMany('App\Product','contact_products','contact_id','product_id');
    }
    public function organization(){
        return $this->belongsTo('App\Organization','organization_id','id');
    }
    public function user(){
        return $this->belongsTo('App\User','assign_to','id');
    }
}
