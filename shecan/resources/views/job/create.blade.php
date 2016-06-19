@extends('layouts.app')
@section('head')
<style>
    .navigation-header {
        position: relative;
    }
    body{
        background: url({{ URL::asset('img/intro/intro5.jpg') }});
        }
        .panel-default > .panel-heading {
            color: #2c3e50;
            background-color: rgba(0, 150, 136, 0);
            border-color: #ecf0f1;
        }
        label{
            color: aliceblue;
        }
        .panel-default {
            border-color: rgba(236, 240, 241, 0.09);
            background-color: rgba(255, 255, 255, 0.16);
        }
    </style>
    @endsection
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create job</div>
                    <div class="panel-body">
                        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/job') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Field</label>
                                <div class="col-md-6">

                                    @if($industries)


                                    <select class="form-control" name="industry">
                                       <!--<span class="caret"></span>-->
                                        @foreach($industries as $industry)
                                        <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                        @endforeach
                                    </select>

                                    @else

                                    @endif


                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">country</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="country" value="{{ old('title') }}">

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="city" value="{{ old('title') }}">

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>

                             <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">tag</label>

                                <div class="col-md-6">
                                    <input type="text" id="tag" class="form-control"data-rowtok="{{ csrf_token() }}" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>create
                                    </button>
                                </div>
                            </div>
                        </form>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section("scripts")
        <script  src="{{ URL::asset('js/jquery.min.js')}}" ></script>
        <script src="{{URL::asset('js/tag.js')}}"></script>

@endsection
   
    