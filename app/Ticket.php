<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public function user(){  return $this->belongsTo('App\User','assign_to','id');}
    public function activities(){  return $this->hasMany('App\Activity');  }
    public function contact(){  return $this->belongsTo('App\Contact');  }
    public function organization(){  return $this->belongsTo('App\Organization');  }
    public function documents(){  return $this->hasMany('App\Document');  }
    public function product(){  return $this->belongsTo('App\Product');  }
}
