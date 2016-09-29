<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected $fillable=['id','first_name','last_name','title','organization_id','email','office_phone'];
}
