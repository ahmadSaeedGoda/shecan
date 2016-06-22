@extends('layouts.app')
@section('head')
    <style>
        .intro-header {
            height: 50%;
            background-size: inherit;
        }
    </style>
@endsection
@section('content')
    <div class="intro-header">
        <div class="col-xs-12 text-center abcen1">
            <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Your Cvs</h1>
        </div>
    </div>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                    <a href="/cv/new" class="btn btn-primary">Add New CV</a>
                </div>
                @foreach($content['message'] as $cv)
                    <div class="col-sm-6  block wow" style="visibility: visible;">
                        <div class="row">
                            <div class="col-md-4 box-icon">
                                <a href="/cv/{{$cv['_id']}}"><i class="fa fa-desktop fa-4x"> </i></a>
                            </div>
                            <div class="col-md-4 box-ct">
                                <h3> @if(isset($cv['Cv_name'])) {{$cv['Cv_name']}} @else Untitled @endif</h3>
                                {{--<p> Created At: {{$cv['created_at']}} </p>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection