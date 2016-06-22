@extends('cv.cv')

@section('side')
    <a class="navmenu-brand">Profile</a>
    @if(isset($data['text']) && isset($key))
        {!! Form::model( $data['text'][$key], array('action' => array('CvController@textInfo', $data['_id'])),
    ['class' => "form-group"])!!}
    @else
        {!! Form::open(array('action' => array('CvController@AddTextInfo', $data['_id'])), ['class' => "form-group"])!!}
    @endif
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::text('Title',null,['class' => 'form-control', 'placeholder'=> 'Title' ])!!}
    </div>
    <div class="form-group">
        {!! Form::label('Description','Description:') !!}
        {!! Form::textArea('Description',null,['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save',['class' => 'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}
    <button id="cancel" class="btn btn-danger" onclick="window.location='/cv/{{$data['_id']}}'">Cancel</button>
@endsection