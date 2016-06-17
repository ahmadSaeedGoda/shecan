<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Follow;
use Auth;
use App\Industry;

use App\Http\Requests;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $Follow=new Follow();
        $Follow->user_id= Auth::user()->id;
        $Follow->industry_id=$request->input("industry_id");
        $Follow->save();
        return redirect('industries');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($industry_id)
    {
        $Follow=new Follow();
        $Follow->user_id=Auth::user()->id;
        $Follow->industry_id=$industry_id;
        $Follow->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($industry_id)
    {
        $matchThese = ['user_id' => Auth::user()->id,'industry_id' => $industry_id];
        $follow = Follow::where($matchThese)->delete();
        return redirect('industries');

    }
}
