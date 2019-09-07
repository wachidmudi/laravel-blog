@extends('layouts.admin')

@section('content')
    <h3>Buat Profil</h3>
    {!! Form::open(['action' => 'ProfilesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            <p>Gambar disarankan memiliki rasio panjang dan lebar sama</p>
            {{Form::label('image', 'Image')}}
            {{Form::file('image')}}
        </div>    
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Masukkan nama'])}}
        </div>
        <div class="form-group">
            {{Form::label('nip', 'NIP')}}
            {{Form::text('nip', '', ['class' => 'form-control', 'placeholder' => 'Masukkan NIP'])}}
        </div>        
         <div class="form-group">
            {{Form::label('position', 'Position')}}
            {{Form::text('position', '', ['class' => 'form-control', 'placeholder' => 'Masukkan jabatan'])}}
        </div>     
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}
@endsection
