<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    function user(){
        return $this->belongsTo('App\User','assign_to','id');
    }
    function lead(){
        return $this->belongsTo('App\Lead');
    }

    function contact(){
        return $this->belongsTo('App\Contact');
    }
    function opportunity(){
        return $this->belongsTo('App\Opportunity');
    }
    function product(){
        return $this->belongsTo('App\Product');
    }
    function organization(){
        return $this->belongsTo('App\Organization');
    }
    function ticket(){
        return $this->belongsTo('App\Ticket');
    }
}
