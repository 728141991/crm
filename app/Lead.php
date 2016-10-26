<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
    public function activity(){  return $this->hasMany('app/Activity');  }
    public function document(){  return $this->hasMany('app/Document');  }
    public function product(){  return $this->belongsToMany('app/Product');  }
    public function campaign(){  return $this->belongsToMany('app/Campaign');  }
}
