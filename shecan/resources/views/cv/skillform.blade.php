@extends('cv.cv')

@section('side')
    <a class="navmenu-brand">Profile</a>
    @if(isset($data['skills']) && isset($key))
            {!! Form::model( $data['skills'][$key], array('action' => array('CvController@skillsInfo', $data['_id'])),
        ['class' => "form-group"])!!}
    @else
        {!! Form::open(array('action' => array('CvController@AddSkillsInfo', $data['_id'])), ['class' => "form-group"])!!}
    @endif
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::text('Name',null,['class' => 'form-control', 'placeholder'=> 'Name' ])!!}
    </div>
    <div class="form-group">
        {!! Form::label('Description','Description:') !!}
        {!! Form::textArea('Description',null,['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('Rate','Rate:') !!}
        <span>{{ Form::selectRange(1, 5, null, ['class' => 'dropdown']) }}</span>
    </div>
    <div class="form-group">
        {!! Form::submit('Save',['class' => 'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}
    <button id="cancel" class="btn btn-danger" onclick="window.location='/cv/{{$data['_id']}}'">Cancel</button>
@endsection