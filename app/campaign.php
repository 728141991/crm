<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    public function activities(){  return $this->hasMany('App\Activity');  }
    public function contacts(){  return $this->belongsToMany('App\Contact');  }
    public function leads(){  return $this->belongsToMany('App\Lead');  }
    //???
    public function opportunity(){  return $this->belongsTo('App\Opportunity');  }
    public function organizations(){  return $this->belongsToMany('App\Organization');  }
    public function user(){  return $this->belongsTo('App\User');  }
}
