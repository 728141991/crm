<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    //
    public function activity(){  return $this->hasMany('app/Activity');  }
    public function contact(){  return $this->belongsToMany('app/Contact');  }
    public function document(){  return $this->hasMany('app/Document');  }
    public function product(){  return $this->belongsToMany('app/Product');  }
    public function organization(){  return $this->belongsTo('app/Organization');  }
    //???
    //public function contact(){  return $this->belongsTo('app/Contact');  }
}
