@extends('layouts.admin')

@section('content')
    <h3>Buat Kalender</h3>
    {!! Form::open(['action' => 'CalendarsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('image')}}
        </div>    
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Masukkan judul'])}}
        </div>   
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}
@endsection
