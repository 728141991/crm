<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    public function organization(){  return $this->belongsTo('App\Organization');  }
    public function ticket(){  return $this->belongsTo('App\Ticket');  }
    public function opportunity(){  return $this->belongsTo('App\Opportunity');  }
    public function campaign(){  return $this->belongsTo('App\Campaign');  }
    public function contact(){  return $this->belongsTo('App\Contact');  }
    public function lead(){  return $this->belongsTo('App\Lead');  }
    public function user(){  return $this->belongsTo('App\User');  }

}
