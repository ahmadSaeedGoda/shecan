<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     public function notification()
    {
    	
        return $this->hasMany('App\Notification');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
