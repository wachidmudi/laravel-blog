@extends('layouts.admin')

@section('content')
    <h1>Edit Galeri</h1>
    {!! Form::open(['action' => ['GalleriesController@update', $gallery->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true ]) !!}
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('image')}}
            {{Form::hidden('old_image', $gallery->image)}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $gallery->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

