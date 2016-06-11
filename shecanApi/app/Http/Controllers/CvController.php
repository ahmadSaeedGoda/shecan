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

    private function afterMake($cv)
    {
        return [
            'user_id' => $cv['user_id'],
            'personal_info' => [
                $cv['personal_info']['name'],
                $cv['personal_info']['age'],
            ],
            'contact_info' => [
                $cv['contact_info']['mobile'],
                $cv['contact_info']['address'],
            ],
            'education' => [
                $cv['education']['school'],
                $cv['education']['faculty']
            ]
        ];
    }

    public function store(Request $request)
    {
        $cv = new Cv;
        $cv['user_id'] = $request['user_id'];
        $cv['personal_info'] = array(
            'name' => $request['name'],
            'age' => $request['age']
        );
        $cv['contact_info'] = array(
            'mobile' => $request['mobile'],
            'address' => $request['address']
        );
        $cv['education'] = array(
            'school' => $request['school'],
            'faculty' => $request['faculty']
        );
        $cv->save();
        return Response::json([
            'message' => 'Cv Created Successfully',
            'data' => $this->afterMake($cv)
        ]);
    }

    public function destroy($id)
    {
        CV::destroy($id);
        return response::json([
            'message' => 'Cv Has Been Deleted'
        ], 200);
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

    public function update($id, Request $request)
    {
        $cv = Cv::find($id);

        $cv['user_id'] = $request['user_id'];
        $cv['personal_info.name'] = $request['name'];

        $cv['personal_info.age'] = $request['age'];

        $cv['contact_info.mobile'] = $request['mobile'];
        $cv['contact_info.address'] = $request['address'];

        $cv['education.school'] = $request['school'];
        $cv['education.faculty'] = $request['faculty'];

        $cv->save();

        return Response::json([
            'message' => 'Cv Updated Successfully'
        ], 200);
    }

    public function getByUser($id)
    {
        $cv = Cv::where('user_id', '=', $id)->get();
        return response::json([
            'message' => $cv
        ], 200);
    }

}
