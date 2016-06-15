<?php

namespace App\Http\Controllers;

use App\Industry;
use App\Job;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Requests;

class JobController extends Controller {

    public function index() {
        return view('job.index');
    }

    public function create() {
        $industries = Industry::all();
        return view('job.create')->withIndustries($industries);
    }

    public function validator(array $data) {
        return Validator::make($data, [
                    'title' => 'required|max:255',
                    'description' => 'required|email|max:255',
        ]);
    }

    public function store(Request $request) {
//        $industry=new \();
//        return "sdfsdf";
        $job = new Job();
        $job->title = $request->get("title");
        $job->company_id = 1;
        $job->industry_id = $request->get("industry");
        $job->description = $request->get("description");
        $job->country = $request->get("country");
        $job->city = $request->get("city");
//        return var_dump($job->industry_id);
        if ($job->save()) {
            $item = new Item();
            $item->title = $job->title;
            $item->job_id = $job->id;
//            $item->isCompleted = 0;
            $item->save();
        }
        return $item->id;
    }

}
