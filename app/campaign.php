<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
<<<<<<< HEAD
    public function activity(){  return $this->hasMany('app/Activity');  }
    public function contact(){  return $this->belongsToMany('app/Contact');  }
    public function lead(){  return $this->belongsToMany('app/Lead');  }
    //???
    public function opportunity(){  return $this->belongsTo('app/Opportunity');  }
    public function organization(){  return $this->belongsToMany('app/Organization');  }
    public function user(){  return $this->belongsTo('app/User');  }
=======
    public function activities(){  return $this->hasMany('App\Activity');  }
    public function contacts(){  return $this->belongsToMany('App\Contact');  }
    public function leads(){  return $this->belongsToMany('App\Lead');  }
    //???
    public function opportunity(){  return $this->belongsTo('App\Opportunity');  }
    public function organizations(){  return $this->belongsToMany('App\Organization');  }
    public function user(){  return $this->belongsTo('App\User');  }
>>>>>>> panshan
}
