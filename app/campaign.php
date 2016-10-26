<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    public function activity(){  return $this->hasMany('app/Activity');  }
    public function contact(){  return $this->belongsToMany('app/Contact');  }
    public function lead(){  return $this->belongsToMany('app/Lead');  }
    //???
    public function opportunity(){  return $this->belongsTo('app/Opportunity');  }
    public function organization(){  return $this->belongsToMany('app/Organization');  }
    public function user(){  return $this->belongsTo('app/User');  }
}
