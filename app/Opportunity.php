<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    //
    public function user() {  return $this->belongsTo('App\User','assign_to','id');  }
    public function activities(){  return $this->hasMany('App\Activity');  }
    public function contacts(){  return $this->belongsToMany('App\Contact');  }
    public function documents(){  return $this->hasMany('App\Document');  }
    public function products(){  return $this->belongsToMany('App\Product');  }
    public function organization(){  return $this->belongsTo('App\Organization');  }

}
