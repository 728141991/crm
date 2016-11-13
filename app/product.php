<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
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
=======
    public function user(){
        return $this->belongsTo('App\User','assign_to','id');
    }
    public function opportunities(){
        return $this->belongsToMany('App\Opportunity');
    }
    public function documents(){
    return $this->hasMany('App\Product');
    }
    public function tickets(){
        return $this->hasMany('App\Ticket');
    }
    public function contacts(){
        return $this->belongsToMany('App\Product','contact_products','contact_id','product_id');
    }
    public function organizations(){
        return $this->belongsToMany('App\Organization');
    }
    public function leads(){
        return $this->belongsToMany('App\Lead');
>>>>>>> panshan
    }
}
