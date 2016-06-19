<?php

namespace App\Http\Controllers;


use Auth;
use App\Industry;
use App\Job;
use App\JobTag;
use App\Follow;
use App\Tag;
use App\Item;
use App\Notification;
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
    public function show()
    {
        $job = Job::orderBy('id')->paginate(10);

        return view('job.show', compact('job'));
    }

    public function store(Request $request) {


        $job = new Job();
        $job->title = $request->get("title");
        $job->company_id = 1;
        $job->industry_id = $request->get("industry");
        $job->description = $request->get("description");
        $job->country = $request->get("country");
        $job->city = $request->get("city");


        if ($job->save()) {
            
            $notification= new Notification();
            $notification->title = $job->title;
            $notification->job_id = $job->id;
            $notification->save();
        }
        // add notification to user which follow industry in items tabel
        if ($notification->save()){
            $follow = Follow::where('industry_id',$job->industry_id )->get()->toArray();
            foreach ($follow as $f) {
                $item = new Item();
                $item->user_id= $f['user_id'];
                $item->notification_id =$notification->id;
                $item->save();
               
            }
       

        }
        // add tag
        $tag = new Tag();
        $tag->name = $request->get("name");
        $tag->save();
        $tag_id = $tag->id;
        $job_id = $job->id;

        // for relation many to many
        $job_tag=new JobTag();
        $job_tag->tag_id=$tag_id;
        $job_tag->job_id=$job_id;
        $job_tag->save();

        
        return redirect('home');
    }
    public function check(){
        echo "string";die();
    }
    // search
    public function search(Request $request){
           $result=array();
            $selected_value=$request->input('element');//get select value from dropdownlist
            // $text = $request->input("text2");//get text from input
            $text = $request->input("search");
            //check value selected

            if ($selected_value=="country") {
                $job = Job::where('country', $text)
                ->where('Publish',1)->get();
            }
            elseif ($selected_value=="job_title") {
                $job = Job::where('job_title', '=', $text)
                ->where('Publish',1)->get();
            }
            else
            {
                $job = Job::where('field', '=', $text)
                ->where('Publish',1)->get();
            }
            
            return view('job.single')->withJob($job);
    }
    // accepted jobs
    public function acceptJobs(Request $request){
        $id=$request->input('job_id');
        $job = Job::find($id);
         // return $job;
        $job->Publish=1;
        return $job;
        $job->save();
        return Job::find($id);
    }
    //not accepted jobs
    public function notAcceptJobs(Request $request){
        $id=$request->input('job_id');
        $job = Job::find($id);
        $job->Publish=0;
        $job->save();
        return Job::find($id);
        // return "not change";
    }
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect('/show');        
    }

}
