<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use App\Http\Requests;
use Auth;

class CvController extends Controller
{
    private function clientData($id)
    {
        $client = new Client;
        $response = $client->get('http://localhost:8000/api/v1/cvs/' . $id);
        $body = $response->getBody();
        $content = json_decode($body->getContents(), true);
        $data = $content['data'];
        return $data;
    }

    public function index()
    {
        $client = new Client;
        $response = $client->get('http://localhost:8000/api/v1/cvs/user/' . Auth::user()->id);
        $body = $response->getBody();
        $content = json_decode($body->getContents(), true);
        return view('cv.usercvs', compact('content'));
    }

    public function newCv(Request $request)
    {
        $name = $request['Name'];
        $client = new Client;
        $response = $client->request('POST', 'http://localhost:8000/api/v1/cvs/', [
            'form_params' => [
                'Cv_name' => $name,
                'user_id' => Auth::user()->id
            ]
        ]);
        dd($response);
        return view('cv.usercvs');
    }

    public function userCV($id)
    {
        $client = new Client;
        $response = $client->get('http://localhost:8000/api/v1/cvs/' . $id);
        $body = $response->getBody();
        $content = json_decode($body->getContents(), true);
        return view('cv.cvMain', compact('content'));
    }

    public function personalInfo($id)
    {
        $data = $this->clientData($id);
        return view('cv.profileform', compact('data'));
    }

    public function summaryInfo($id)
    {
        $data = $this->clientData($id);
        return view('cv.summaryform', compact('data'));
    }

    public function educationInfo($id)
    {
        $data = $this->clientData($id);
        if (isset($_GET['key']))
            $key = $_GET['key'];
        return view('cv.educationform', compact('data', 'key'));
    }

    public function workInfo($id)
    {
        $data = $this->clientData($id);
        if (isset($_GET['key']))
            $key = $_GET['key'];
        return view('cv.workhistoryform', compact('data', 'key'));
    }

    public function skillsInfo($id)
    {
        $data = $this->clientData($id);
        if (isset($_GET['key']))
            $key = $_GET['key'];
        return view('cv.skillform', compact('data', 'key'));
    }

    public function textInfo($id)
    {
        $data = $this->clientData($id);
        if (isset($_GET['key']))
            $key = $_GET['key'];
        return view('cv.textform', compact('data', 'key'));
    }

    public function AddPersonalInfo(Request $request, $id)
    {
        $client = new Client;
        $response = $client->request('POST', 'http://localhost:8000/api/v1/cvs/profile/' . $id, [
            'form_params' => [
                'Name' => $request['Name'],
                'Email' => $request['Email'],
                'Mobile' => $request['Mobile'],
                'Address' => $request['Address'],
                'Job' => $request['Job'],
                'Linkedin' => $request['Linkedin'],
                'WebSite' => $request['WebSite']
            ]
        ]);
        return $this->userCV($id);
    }

    public function AddSummaryInfo(Request $request, $id)
    {
        $client = new Client;
        $response = $client->request('POST', 'http://localhost:8000/api/v1/cvs/summary/' . $id, [
            'form_params' => [
                'Description' => $request['Description']
            ]
        ]);
        return $this->userCV($id);
    }

    public function AddWorkInfo(Request $request, $id)
    {
        if ($value = str_contains(back()->gettargetUrl(), 'key')) {
            $x = strlen(back()->gettargetUrl());
            $key = back()->gettargetUrl()[$x - 1];
        } else
            $key = 'false';
        $client = new Client;
        $response = $client->request('POST', 'http://localhost:8000/api/v1/cvs/work/' . $id, [
            'form_params' => [
                'Job_title' => $request['Job_title'],
                'Organization' => $request['Organization'],
                'Website' => $request['Website'],
                'Description' => $request['Description'],
                'Start_date' => $request['Start_date'],
                'End_date' => $request['End_date'],
                'key' => $key
            ]
        ]);
        return $this->userCV($id);
    }

    public function AddEducationInfo(Request $request, $id)
    {
        if ($value = str_contains(back()->gettargetUrl(), 'key')) {
            $x = strlen(back()->gettargetUrl());
            $key = back()->gettargetUrl()[$x - 1];
        } else
            $key = 'false';
        $client = new Client;
        $response = $client->request('POST', 'http://localhost:8000/api/v1/cvs/education/' . $id, [
            'form_params' => [
                'Degree_name' => $request['Degree_name'],
                'School_name' => $request['School_name'],
                'Website' => $request['Website'],
                'Description' => $request['Description'],
                'Start_date' => $request['Start_date'],
                'End_date' => $request['End_date'],
                'key' => $key
            ]
        ]);
        return $this->userCV($id);

    }

    public function AddSkillsInfo(Request $request, $id)
    {
        if ($value = str_contains(back()->gettargetUrl(), 'key')) {
            $x = strlen(back()->gettargetUrl());
            $key = back()->gettargetUrl()[$x - 1];
        } else
            $key = 'false';
        $client = new Client;
        $response = $client->request('POST', 'http://localhost:8000/api/v1/cvs/skills/' . $id, [
            'form_params' => [
                'Name' => $request['Name'],
                'Description' => $request['Description'],
                'Rate' => $request['Rate'],
                'key' => $key
            ]
        ]);
        return $this->userCV($id);
    }

    public function AddTextInfo(Request $request, $id)
    {
        if ($value = str_contains(back()->gettargetUrl(), 'key')) {
            $x = strlen(back()->gettargetUrl());
            $key = back()->gettargetUrl()[$x - 1];
        } else
            $key = 'false';
        $client = new Client;
        $response = $client->request('POST', 'http://localhost:8000/api/v1/cvs/text/' . $id, [
            'form_params' => [
                'Title' => $request['Title'],
                'Description' => $request['Description'],
                'key' => $key
            ]
        ]);
        return $this->userCV($id);
    }
}
