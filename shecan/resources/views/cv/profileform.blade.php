@extends('cv.cv')

@section('side')
    <a class="navmenu-brand">Profile</a>
    @if(isset($data['personal_info']))
        {!! Form::model( $data['personal_info'], array('action' => array('CvController@personalInfo', $data['_id'])),
    ['class' => "form-group"])!!}
    @else
        {!! Form::open(array('action' => array('CvController@AddPersonalInfo', $data['_id'])), ['class' => "form-group"])!!}
    @endif
    {{ csrf_field() }}
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('Name',null,['class' => 'form-control', 'placeholder'=> 'Name' ])!!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('Email',null,['class' => 'form-control', 'placeholder'=> 'Email' ])!!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('Mobile',null,['class' => 'form-control', 'placeholder'=> 'Phone Number' ])!!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('Address',null,['class' => 'form-control', 'placeholder'=> 'Address' ])!!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('Job',null,['class' => 'form-control', 'placeholder'=> 'Job Title' ])!!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('Linkedin',null,['class' => 'form-control', 'placeholder'=> 'Linkedin Account' ])!!}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('WebSite',null,['class' => 'form-control', 'placeholder'=> 'Personal Website' ])!!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::submit('Save',['class' => 'btn btn-primary'])!!}
        </div>
    </div>
    {!! Form::close() !!}
    <div class="col-md-6">
        <button id="cancel" class="btn btn-danger" onclick="window.location='/cv/{{$data['_id']}}'">Cancel</button>
    </div>
@endsection