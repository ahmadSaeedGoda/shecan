@extends('layout')
@section('header')
   
    <script  src="{{ URL::asset('js/jquery.min.js')}}" ></script>
     <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Jobs Ads
            <!-- <a class="btn btn-success pull-right" href="{{ route('industries.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a> -->
        </h1>

    </div>
    
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
                        <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($job as $job)
                            <tr>
                                <!-- <td>{{$job->id}}</td> -->
                                <td>{{$job->country}}</td>
                                <td>{{$job->city}}</td>
                                <td>{{$job->title}}</td>
                                <td>{{$job->description}}</td>
                                <td>{{$job->industeries->name}}</td>
                                <td>
                                @if($job->Publish)
                                 <input type="checkbox" data-rowtok="{{ csrf_token() }}" data-rowid="{{ $job->id }}" class="is_accepted" id="accepted" name="accepted" checked>
                                @else 
                                 <input type="checkbox" data-rowtok="{{ csrf_token() }}" data-rowid="{{ $job->id }}" class="is_accepted" id="accepted" name="accepted">
                                 @endif
                                 </td>
                                <!-- <td class="text-right"> -->
                                <td><form action="{{ route('job.destroy', $job->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form> </td>
                               
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