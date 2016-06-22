<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Cv extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cvs';
    
}
