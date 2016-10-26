<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public function activity(){  return $this->hasMany('app/Activity');  }
    public function contact(){  return $this->belongsTo('app/Contact');  }
    public function organization(){  return $this->belongsTo('app/Organization');  }
    public function document(){  return $this->hasMany('app/Document');  }
    public function product(){  return $this->belongsTo('app/Product');  }
}
