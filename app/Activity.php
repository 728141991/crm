<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    public function organization(){  return $this->belongsTo('app/Organization');  }
    public function ticket(){  return $this->belongsTo('app/Ticket');  }
    public function opportunity(){  return $this->belongsTo('app/Opportunity');  }
    public function campaign(){  return $this->belongsTo('app/Campaign');  }
    public function contact(){  return $this->belongsTo('app/Contact');  }
    public function lead(){  return $this->belongsTo('app/Lead');  }
    public function user(){  return $this->belongsTo('app/User');  }

}
