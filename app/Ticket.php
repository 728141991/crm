<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
<<<<<<< HEAD
    public function activity(){  return $this->hasMany('app/Activity');  }
    public function contact(){  return $this->belongsTo('app/Contact');  }
    public function organization(){  return $this->belongsTo('app/Organization');  }
    public function document(){  return $this->hasMany('app/Document');  }
    public function product(){  return $this->belongsTo('app/Product');  }
=======
    public function user(){  return $this->belongsTo('App\User','assign_to','id');}
    public function activities(){  return $this->hasMany('App\Activity');  }
    public function contact(){  return $this->belongsTo('App\Contact');  }
    public function organization(){  return $this->belongsTo('App\Organization');  }
    public function documents(){  return $this->hasMany('App\Document');  }
    public function product(){  return $this->belongsTo('App\Product');  }
>>>>>>> panshan
}
