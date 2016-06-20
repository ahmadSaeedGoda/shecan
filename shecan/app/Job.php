<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function job_tags()
    {
        return $this->belongsTo('App\JobTag');
    }

    public function industeries()
    {
        return $this->belongsTo('App\Industry','industry_id');
    }
    public function company()
    {
        return $this->belongsTo('App\Company','company_id');
    }
}
