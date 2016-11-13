<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
   // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

<<<<<<< HEAD
    public function organizations(){  return $this->hasManyThrough('App\Organization','App\Contact','organizationId',NULL,'id');  }
    public function ticket(){  return $this->belongsTo('App\Ticket');  }
    public function opportunity(){  return $this->belongsTo('App\Opportunity');  }
    public function campaign(){  return $this->belongsTo('App\Campaign');  }
    public function contacts(){  return $this->hasMany('App\Contact','assign_to','id');  }
    public function lead(){  return $this->belongsTo('App\Lead');  }
    public function activity(){  return $this->hasMany('App\Activity');  }
    public function documents(){  return $this->hasMany('App\Document');  }
    public function products(){  return $this->hasMany('App\Product');  }
=======
    public function organizations(){  return $this->hasMany('App\Organization','assign_to','id');  }
    public function tickets(){  return $this->hasMany('App\Ticket');  }
    public function opportunities(){  return $this->hasMany('App\Opportunity');  }
    public function campaigns(){  return $this->hasMany('App\Campaign');  }
    public function contacts(){  return $this->hasMany('App\Contact','assign_to','id');  }
    public function leads(){  return $this->hasMany('App\Lead','assign_to','id');  }
    public function activities(){  return $this->hasMany('App\Activity');  }
    public function documents(){  return $this->hasMany('App\Document','assign_to','id');  }
    public function products(){  return $this->hasMany('App\Product','assign_to','id');  }
>>>>>>> panshan

}
