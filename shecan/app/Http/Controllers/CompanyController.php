<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Company;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;



class CompanyController extends Controller {

    public function index() {
        return view('company.register');
    }

    public function create() {
        return view('company.register');
    }

    public function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255|unique:users',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
        ]);
    }

    public function store(Request $request) {
        $company = new Company();
        $company->name = $request->get("name");
        $company->email = $request->get("email");
        $company->password = bcrypt($request->get("password"));
        $company->body = $request->get("body");

        if (Input::file('image')) {
            $file = array('image' => Input::file('image'));
            $rules = array('image' => 'image|max:500');
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {

                return back()->withErrors($validator);
            } else {
                $ex = Input::file('image')->getClientOriginalExtension();
                $name = $company->name . '.' . $ex;
                Input::file('image')->move(public_path() . '/upload', $name);
                $company->image = '/upload/' . $name;
            }
        }

//           return var_dump($company->body);
        $company->save();
    }

}
