<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
    public function user(){  return $this->belongsTo('App\User','assign_to','id');}
    public function activities(){  return $this->hasMany('app/Activity');  }
    public function documents(){  return $this->hasMany('app/Document');  }
    public function products(){  return $this->belongsToMany('app/Product');  }
    public function campaigns(){  return $this->belongsToMany('app/Campaign');  }
}
