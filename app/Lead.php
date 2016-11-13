<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
<<<<<<< HEAD
    public function activity(){  return $this->hasMany('app/Activity');  }
    public function document(){  return $this->hasMany('app/Document');  }
    public function product(){  return $this->belongsToMany('app/Product');  }
    public function campaign(){  return $this->belongsToMany('app/Campaign');  }
=======
    public function user(){  return $this->belongsTo('App\User','assign_to','id');}
    public function activities(){  return $this->hasMany('app/Activity');  }
    public function documents(){  return $this->hasMany('app/Document');  }
    public function products(){  return $this->belongsToMany('app/Product');  }
    public function campaigns(){  return $this->belongsToMany('app/Campaign');  }
>>>>>>> panshan
}
