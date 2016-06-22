@extends('cv.cv')

@section('side')
    <a class="navmenu-brand">Summary</a>
    @if(isset($data['summary']))
        {!! Form::model( $data['summary'], array('action' => array('CvController@summaryInfo', $data['_id'])),
    ['class' => "form-group"])!!}
    @else
        {!! Form::open(array('action' => array('CvController@AddSummaryInfo', $data['_id'])), ['class' => "form-group"])!!}
    @endif
    {{ csrf_field() }}
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