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

    public function store(Request $request)
    {
        $cv = new Cv;
        $cv['Cv_name'] = $request['Cv_name'];
        $cv['user_id'] = $request['user_id'];

        $cv->save();
        return Response::json([
            'message' => 'Cv Created Successfully',
        ], 200);
    }

    public function storeProfile(Request $request, $id)
    {
        $cv = Cv::where('_id', '=', $id)->first();
        $cv['personal_info'] = array(
            'Name' => $request['Name'],
            'Email' => $request['Email'],
            'Mobile' => $request['Mobile'],
            'Address' => $request['Address'],
            'Job' => $request['Job'],
            'Linkedin' => $request['Linkedin'],
            'WebSite' => $request['WebSite']
        );
        $cv->save();
        return Response::json([
            'message' => 'PersonalInfo Updated Successfully',
        ], 200);
    }

    public function storeSummary(Request $request, $id)
    {
        $cv = Cv::where('_id', '=', $id)->first();
        $cv['summary'] = array(
            'Description' => $request['Description'],
        );
        $cv->save();
        return Response::json([
            'message' => 'SummaryInfo Updated Successfully',
        ], 200);
    }

    public function storeWork(Request $request, $id)
    {
        $cv = Cv::where('_id', '=', $id)->first();
        $work = $cv->work;
        if (($request['key']) == 'false') {
            $request['key'] = count($work) + 1;
        }
        
        $work[$request['key']] = array(
            'Job_title' => $request['Job_title'],
            'Organization' => $request['Organization'],
            'Website' => $request['Website'],
            'Description' => $request['Description'],
            'Start_date' => $request['Start_date'],
            'End_date' => $request['End_date']
        );
        $cv['work'] = $work;

        $cv->save();
        
        return Response::json([
            'message' => 'WorkInfo Updated Successfully',
        ], 200);
    }

    public function storeEducation(Request $request, $id)
    {
        $cv = Cv::where('_id', '=', $id)->first();
        $education = $cv->education;
        if (($request['key']) == 'false') {
            $request['key'] = count($education) + 1;
        }

        $education[$request['key']] = array(
            'Degree_name' => $request['Degree_name'],
            'School_name' => $request['School_name'],
            'Website' => $request['Website'],
            'Description' => $request['Description'],
            'Start_date' => $request['Start_date'],
            'End_date' => $request['End_date'],
        );
        $cv['education'] = $education;

        $cv->save();
        
        return Response::json([
            'message' => 'Education Info Updated Successfully',
        ], 200);
    }

    public function storeSkills(Request $request, $id)
    {
        $cv = Cv::where('_id', '=', $id)->first();
        $skills = $cv->skills;
        if (($request['key']) == 'false') {
            $request['key'] = count($skills) + 1;
        }

        $skills[$request['key']] = array(
            'Name' => $request['Name'],
            'Description' => $request['Description'],
            'Rate' => $request['Rate'],
        );
        $cv['skills'] = $skills;

        $cv->save();
        return Response::json(['message' => 'Skills Info Updated Successfully'], 200);
    }

    public function storeText(Request $request, $id)
    {
        $cv = Cv::where('_id', '=', $id)->first();
        $text = $cv->text;
        if (($request['key']) == 'false') {
            $request['key'] = count($text) + 1;
        }

        $text[$request['key']] = array(
            'Title' => $request['Title'],
            'Description' => $request['Description'],
        );
        $cv['text'] = $text;

        $cv->save();
        return Response::json(['message' => 'Text Info Updated Successfully'], 200);
    }

    function destroy($id)
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

    public
    function update($id, Request $request)
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

    public
    function getByUser($id)
    {
        $cv = Cv::where('user_id', '=', $id)->get();
        return response::json([
            'message' => $cv
        ], 200);
    }

}
