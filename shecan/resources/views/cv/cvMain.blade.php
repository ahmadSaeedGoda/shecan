@extends('cv.cv')

@section('side')

    <div>
        <!-----profile section----------------------------------------------------------------------->
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="{{URL::asset('img/status.gif')}}" alt="...">
            </a>
        </div>
        <div class="col-md-9">
            <a class="navmenu-brand" href="#">Profile</a>
            <div id='profileEdit' class="uneditable-input"
                 onclick="window.location='/cv/{{$content['data']['_id']}}/personal'">
                @if(isset($content['data']['personal_info']))
                    <div>{{$content['data']['personal_info']['Name']}}</div>
                    <div>{{$content['data']['personal_info']['Mobile']}}</div>

                @else
                    <div>{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                @endif
                {{--<div>{{$personalInfo['Mobile']}}</div>--}}
            </div>
        </div>
    </div>
    <!---------Summary Section---------------------------------------------------------------------->
    <div class="col-md-12">
        <a class="navmenu-brand">Summary</a>
        <div id='summaryEdit' class="uneditable-input"
             onclick="window.location='/cv/{{$content['data']['_id']}}/summary'">
            @if(isset($content['data']['summary']))
                <div>Click to Edit Summary</div>
            @else
                ......
            @endif
        </div>
    </div>
    <!-------------Work History Section-------------------------------------------------------------->
    <div class="col-md-12">
        <a class="navmenu-brand">Work History</a>
        <div id='workEdit' class="uneditable-input" onclick="window.location='/cv/{{$content['data']['_id']}}/work'">
            <i class="fa fa-plus"></i> &nbsp; &nbsp; Add Work History
        </div>
        @if(isset($content['data']['work']))
            @foreach($content['data']['work'] as $key => $value)
                <div class="uneditable-input"
                     onclick="window.location='/cv/{{$content['data']['_id']}}/work/?key={{$key}}'">
                    <div> {!!  $value['Job_title']!!}</div>
                    <div>{!!  $value['Organization']!!}</div>
                </div>
            @endforeach
        @endif
    </div>
    <!-------------Education Section----------------------------------------------------------------------->
    <div class="col-md-12">
        <a class="navmenu-brand">Education</a>
        <div id='educationEdit' class="uneditable-input"
             onclick="window.location='/cv/{{$content['data']['_id']}}/education'">
            <i class="fa fa-plus"></i> &nbsp; &nbsp; Add Education
        </div>
        @if(isset($content['data']['education']))
            @foreach($content['data']['education'] as $key => $value)
                <div class="uneditable-input"
                     onclick="window.location='/cv/{{$content['data']['_id']}}/education/?key={{$key}}'">
                    <div> {!!  $value['Degree_name']!!}</div>
                    <div>{!!  $value['School_name']!!}</div>
                </div>
            @endforeach
        @endif
    </div>
    <!-------------Skills Section---------------------------------------------------------------------------->
    <div class="col-md-12">
        <a class="navmenu-brand">Skills</a>
        <div id="skillEdit" class="uneditable-input" onclick="window.location='/cv/{{$content['data']['_id']}}/skills'">
            <i class="fa fa-plus"></i> &nbsp; &nbsp; Add Skills
        </div>
        @if(isset($content['data']['skills']))
            @foreach($content['data']['skills'] as $key => $value)
                    <div class="uneditable-input"
                         onclick="window.location='/cv/{{$content['data']['_id']}}/skills/?key={{$key}}'">
                        <div> {!!  $value['Name']!!}</div>
                    </div>
            @endforeach
        @endif
        <hr/>
    </div>
    <!--- Add Text Section---------------------------------------------------------------------------------->
    <div class="col-md-12">
        <a class="navmenu-brand">Custom Text Section</a>
        <div id="skillEdit" class="uneditable-input" onclick="window.location='/cv/{{$content['data']['_id']}}/text'">
            <i class="fa fa-plus"></i> &nbsp; &nbsp; Add Text Section
        </div>
        @if(isset($content['data']['text']))
            @foreach($content['data']['text'] as $key => $value)
                <div class="uneditable-input"
                     onclick="window.location='/cv/{{$content['data']['_id']}}/text/?key={{$key}}'">
                    <div> {!!  $value['Title']!!}</div>
                </div>
            @endforeach
        @endif
        <hr/>
    </div>
    <!----Add Portfolio------------------------------------------------------------------------------------->
    <div class="col-md-12">
        <div class="uneditable-input">
            <i class="fa fa-plus"></i> &nbsp; &nbsp; Add Portfolio
        </div>
    </div>

@endsection