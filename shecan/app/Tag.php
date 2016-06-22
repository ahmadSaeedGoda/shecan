<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function job_tags()
    {
    	
        return $this->belongsTo('App\JobTag');
    }
}
