@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Industries
            <a class="btn btn-success pull-right" href="{{ route('industries.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($industries->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($industries as $industry)
                            <tr>
                                <td>{{$industry->id}}</td>
                                <td>{{$industry->name}}</td>
                                <!-- <button  class="btn btn-xs btn-success" data-text-swap="un follow" data-id="{{$industry->id}}">follow</button> -->
                                <!-- <td><form action="{{ route('follow.store') }}" method="POST" style="display: inline;" >
                                        <input type="hidden" name="_method" value="POST">
                                        <input type="hidden" name="industry_id" value="{{$industry->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-success" data-text-swap="un follow" id="follow"><i class=" fa fa-btn star "></i>follow</button>
                                    </form>
                                </td>
                                <td> <form action="{{ route('follow.destroy', $industry->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> un follow</button>
                                    </form>
                                </td>  -->


                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('industries.show', $industry->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('industries.edit', $industry->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('industries.destroy', $industry->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $industries->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>
@endsection
@section('scripts')
<script src="{{ asset('js/jquery-1.9.1.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
 $("button").on("click", function() {
  var el = $(this);
  if (el.text() == el.data("text-swap")) {
    el.text(el.data("text-original"));
  } else {
    el.data("text-original", el.text());
    el.text(el.data("text-swap"));
    $("")
  }
});

});
</script>
@endsection