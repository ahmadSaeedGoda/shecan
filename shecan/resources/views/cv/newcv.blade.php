@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => '/cv/new', 'class' => "form-group"])!!}
            {{ csrf_field() }}
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::text('Name',null,['class' => 'form-control', 'placeholder'=> 'Cv Name' ])!!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::hidden('DateAdded',\Carbon\Carbon::now(),['class' => 'form-control', ])!!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::submit('Save',['class' => 'btn btn-primary'])!!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection