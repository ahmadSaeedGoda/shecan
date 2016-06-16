<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTag extends Model
{
    
    public function tags()
    {
    	
        return $this->hasMany('App\Tag');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
