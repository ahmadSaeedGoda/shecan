<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

use App\Http\Requests;

class TagController extends Controller
{
    public function check(Request $request)
    {
    	$tag=$request->input('text');
    	return $tag;
    }

}
