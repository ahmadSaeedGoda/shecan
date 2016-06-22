<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function items()
    {
    	
        return $this->belongsTo('App\Item');
    }
    public function jobs()
    {
    	
        return $this->belongsTo('App\Job','job_id');
    }
}
