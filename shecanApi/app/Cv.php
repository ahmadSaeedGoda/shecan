<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class CV extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cvs';
    
}
