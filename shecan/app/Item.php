<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     public function notification()
    {
    	
        return $this->belongsTo('App\Notification','notification_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
