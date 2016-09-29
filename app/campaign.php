<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class campaign extends Model
{
    protected $fillable = ['id', 'campaign_name', 'campaign_type', 'campaign_status', 'created_time','modified',
        'target_audience','budget_cost','actual_cost'];

    //
}
