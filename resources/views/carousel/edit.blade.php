@extends('layouts.admin')

@section('content')
    <h3>Edit Slider</h3>
    {!! Form::open(['action' => ['CarouselsController@update', $carousel->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <span>Ukuran gambar yang diupload, maksimal 2MB</span><br>
        <span>Resolusi yang direkomendasikan yaitu 1700 x 570 px</span>
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('image')}}
            {{Form::hidden('old_image', $carousel->image)}}
        </div>    
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $carousel->title, ['class' => 'form-control', 'placeholder' => 'Masukkan judul'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $carousel->description, ['class' => 'form-control', 'placeholder' => 'Masukkan deskripsi'])}}
        </div>
        <div class="form-group">
            {{Form::label('link', 'Link')}}
            {{Form::text('link', $carousel->link, ['class' => 'form-control', 'placeholder' => 'Masukkan link/tautan'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}
@endsection
