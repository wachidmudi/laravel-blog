@extends('layouts.admin')

@section('content')
    <h3>Buat Galeri</h3>
    {!! Form::open(['action' => 'GalleriesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('image')}}
        </div>    
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Masukkan nama'])}}
        </div>   
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}
@endsection
