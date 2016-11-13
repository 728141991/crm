<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    //
<<<<<<< HEAD
    public function activity(){  return $this->hasMany('app/Activity');  }
    public function contact(){  return $this->belongsToMany('app/Contact');  }
    public function document(){  return $this->hasMany('app/Document');  }
    public function product(){  return $this->belongsToMany('app/Product');  }
    public function organization(){  return $this->belongsTo('app/Organization');  }
    //???
    //public function contact(){  return $this->belongsTo('app/Contact');  }
=======
    public function user() {  return $this->belongsTo('App\User','assign_to','id');  }
    public function activities(){  return $this->hasMany('App\Activity');  }
    public function contacts(){  return $this->belongsToMany('App\Contact');  }
    public function documents(){  return $this->hasMany('App\Document');  }
    public function products(){  return $this->belongsToMany('App\Product');  }
    public function organization(){  return $this->belongsTo('App\Organization');  }

>>>>>>> panshan
}
