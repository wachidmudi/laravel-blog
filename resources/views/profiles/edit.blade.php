@extends('layouts.admin')

@section('content')
    <h1>Edit Profil</h1>
    {!! Form::open(['action' => ['ProfilesController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('image', 'Image')}}
            {{Form::file('image')}}
            {{Form::hidden('old_image', $profile->image)}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $profile->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('nip', 'NIP')}}
            {{Form::text('nip', $profile->nip, ['class' => 'form-control', 'placeholder' => 'Masukkan NIP'])}}
        </div>          
        <div class="form-group">
            {{Form::label('position', 'Position')}}
            {{Form::text('position', $profile->position, ['class' => 'form-control', 'placeholder' => 'Position'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

