@extends('layout')



@section('content')
    <div class="row">
        <div class="col-md-12">
                @if (!$job->isEmpty())
        <!-- 
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                           
	                        <th>COUNTRY</th>
	                        <th>CITY</th>
	                        <th>JOB_TITLE</th>
	                        <th>DESCRIPTION</th>
	                        <th>FIELD</th>
                           
                        </tr>
                    </thead> -->

                    <!-- <tbody> -->
                        @foreach($job as $job)
                           <!--  <tr> -->
                             <div class="free_job job-box panel-content clearfix Even">
                             <h6 class="meta">
                                    <span class="label label-warning">
                                        <i class="fa fa-warning">اعلان shecan</i>
                                        shecan - moonk business
                                    </span>
                                </h6>
                                <h3> مطلوب مبرمجة{{$job->job_title}}</h3>
                                <p class="arabic_text">{{$job->description}}</p>
                                
                               <!--  <td>{{$job->country}}</td>
			                    <td>{{$job->city}}</td>
			                    <td>{{$job->job_title}}</td>
			                    <td>{{$job->description}}</td>
			                    <td>{{$job->field}}</td> -->
                                </div>
                                
                            <!-- </tr> -->
                        @endforeach
                   <!--  </tbody> -->
                <!-- </table> -->
                @else
                <p> sorry no job found !!!</p>
                @endif
               
           

        </div>
    </div>

@endsection
<style type="text/css">
    .free_job {
    border: solid 1px #d3d3d3;
    }
    .job-box {
        margin-bottom: 20px;
        font-size: 14px;
    }
    .panel-content {
        background: #fff;
        border: 1px solid #d3d3d3;
        padding: 15px;
    }
    p {
    padding-bottom: 5px;
    line-height: 20px;
    }
    p {
        margin: 0 0 10px;
    }
    .meta {
    line-height: 150%;
    color: #777;
}
</style>