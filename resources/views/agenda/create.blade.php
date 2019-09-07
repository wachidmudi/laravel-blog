@extends('layouts.admin')

@section('rel_stylesheet')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('content')
    <h1>Buat Agenda</h1>
    {!! Form::open(['action' => 'AgendasController@store', 'method' => 'POST']) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::label('name', 'Nama')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nama'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Deskripsi')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
        </div>
        <div class="form-group">
            {{Form::label('waktu', 'Waktu Agenda')}}
            {{Form::text('date', '', ['class' => 'form-control date'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

@section('footer_scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <script>
      $('.date').datepicker({
          autoclose: true,
          todayHighlight: true,
          // format: "yyyy-m-d"
          format: "d-m-yyyy"
      });
  </script>
@endsection


