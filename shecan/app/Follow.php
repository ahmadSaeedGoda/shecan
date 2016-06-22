<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    
    public function industry()
    {
    	
        return $this->hasMany('App\Industry');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
