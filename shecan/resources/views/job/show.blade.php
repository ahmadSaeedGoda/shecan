@extends('layout')
@section('header')
   
    <script  src="{{ URL::asset('js/jquery.min.js')}}" ></script>
    
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12">
            @if($job->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                        <!-- <th>ID</th> -->
                        <th>COUNTRY</th>
                        <th>CITY</th>
                        <th>JOB_TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>FIELD</th>
                        <th>Accepted</th>
                        <!-- <th class="text-right">OPTIONS</th> -->
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($job as $job)
                            <tr>
                                <!-- <td>{{$job->id}}</td> -->
                                <td>{{$job->country}}</td>
                                <td>{{$job->city}}</td>
                                <td>{{$job->job_title}}</td>
                                <td>{{$job->description}}</td>
                                <td>{{$job->field}}</td>
                                <td>
                                @if($job->Publish)
                                 <input type="checkbox" data-rowtok="{{ csrf_token() }}" data-rowid="{{ $job->id }}" class="is_accepted" id="accepted" name="accepted" checked>
                                @else 
                                 <input type="checkbox" data-rowtok="{{ csrf_token() }}" data-rowid="{{ $job->id }}" class="is_accepted" id="accepted" name="accepted">
                                 @endif
                                 </td>
                                <td class="text-right">
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
               
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
 
@section("scripts")
<script src="{{URL::asset('js/job.js')}}"></script>

@endsection