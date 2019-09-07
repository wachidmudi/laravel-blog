@extends('layouts.admin')

@section('content')
    <h3>Buat Slider</h3>
    {!! Form::open(['action' => 'CarouselsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <span>Ukuran gambar yang diupload, maksimal 2MB</span><br>
        <span>Resolusi yang direkomendasikan yaitu 1700 x 570 px</span>
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('image')}}
        </div>    
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Masukkan judul'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Masukkan deskripsi'])}}
        </div>
        <div class="form-group">
            {{Form::label('link', 'Link')}}
            {{Form::text('link', '', ['class' => 'form-control', 'placeholder' => 'Masukkan link/tautan'])}}
        </div>        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}
@endsection
