<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    public function activities(){  return $this->hasMany('App\Activity');  }
    public function contacts(){
        return $this->belongsToMany('App\Contact','contact_campaigns','campaign_id','contact_id');}
    public function leads(){  return $this->belongsToMany('App\Lead');  }
    //???
    public function opportunity(){  return $this->belongsTo('App\Opportunity');  }
    public function organizations(){
        return $this->belongsToMany('App\Organization','organization_campaigns','campaign_id','organization_id');  }
    public function user(){  return $this->belongsTo('App\User');  }
}
