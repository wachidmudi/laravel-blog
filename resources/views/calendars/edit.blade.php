@extends('layouts.admin')

@section('content')
    <h1>Edit Kalender</h1>
    {!! Form::open(['action' => ['CalendarsController@update', $calendar->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true ]) !!}
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('image')}}
            {{Form::hidden('old_image', $calendar->image)}}
        </div>
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $calendar->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

