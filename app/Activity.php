<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
<<<<<<< HEAD
    public function organization(){  return $this->belongsTo('app/Organization');  }
    public function ticket(){  return $this->belongsTo('app/Ticket');  }
    public function opportunity(){  return $this->belongsTo('app/Opportunity');  }
    public function campaign(){  return $this->belongsTo('app/Campaign');  }
    public function contact(){  return $this->belongsTo('app/Contact');  }
    public function lead(){  return $this->belongsTo('app/Lead');  }
    public function user(){  return $this->belongsTo('app/User');  }
=======
    public function organization(){  return $this->belongsTo('App\Organization');  }
    public function ticket(){  return $this->belongsTo('App\Ticket');  }
    public function opportunity(){  return $this->belongsTo('App\Opportunity');  }
    public function campaign(){  return $this->belongsTo('App\Campaign');  }
    public function contact(){  return $this->belongsTo('App\Contact');  }
    public function lead(){  return $this->belongsTo('App\Lead');  }
    public function user(){  return $this->belongsTo('App\User');  }
>>>>>>> panshan

}
