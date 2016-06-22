@extends('cv.cv')

@section('side')
    <a class="navmenu-brand">Profile</a>
    @if(isset($data['education']) && isset($key))
        {!! Form::model( $data['education'][$key], array('action' => array('CvController@educationInfo', $data['_id'])),
    ['class' => "form-group"])!!}
    @else
        {!! Form::open(array('action' => array('CvController@AddEducationInfo', $data['_id'])), ['class' => "form-group"])!!}
    @endif
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::text('Degree_name',null,['class' => 'form-control', 'placeholder'=> 'Degree Name' ])!!}
    </div>
    <div class="form-group">
        {!! Form::text('School_name',null,['class' => 'form-control', 'placeholder'=> 'School Name' ])!!}
    </div>
    <div class="form-group">
        {!! Form::text('Website',null,['class' => 'form-control', 'placeholder'=> 'Website' ])!!}
    </div>
    <div class="form-group">
        {!! Form::label('Description','Description:') !!}
        {!! Form::textArea('Description',null,['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('Start_date','Start Date:') !!}
        {!! Form::text('Start_date',null,['class' => 'form-control', 'placeholder'=> 'YYYY' ])!!}
    </div>
    <div class="form-group">
        {!! Form::label('End_date','End Date:') !!}
        {!! Form::text('End_date',null,['class' => 'form-control', 'placeholder'=> 'YYYY' ])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save',['class' => 'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}
    <button id="cancel" class="btn btn-danger" onclick="window.location='/cv/{{$data['_id']}}'">Cancel</button>
@endsection