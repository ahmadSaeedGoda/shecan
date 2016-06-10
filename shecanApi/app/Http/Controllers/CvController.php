<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Cv;

use App\Http\Requests;

class CvController extends Controller
{
    public function index()
    {
        $cvs = Cv::all();
        return Response::json([
            'message' => $cvs
        ], 200);

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function destroy()
    {

    }

    public function show($id)
    {
        $cv = Cv::find($id);
        if (!$cv) {
            return Response::json([
                'error' => ['message' => 'Cv does not exist']
            ], 404);
        }
        return Response::json([
            'data' => $cv
        ], 200);
    }

    public function update()
    {

    }

    public function edit()
    {

    }
}
