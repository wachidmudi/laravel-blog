@extends('layouts.admin')

@section('rel_stylesheet')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('content')
    <h1>Edit Agenda</h1>
    {!! Form::open(['action' => ['AgendasController@update', $agenda->id], 'method' => 'POST']) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::label('name', 'Nama')}}
            {{Form::text('name', $agenda->name, ['class' => 'form-control', 'placeholder' => 'Nama'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Deskripsi')}}
            {{Form::textarea('description', $agenda->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
        </div>
        <div class="form-group">
            {{Form::label('waktu', 'Waktu Agenda')}}
            {{Form::text('date', $agenda->getOriginal('date'), ['class' => 'form-control date'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

@section('footer_scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <script>
      $('.date').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: "d-m-yyyy",
          startDate: '{{date("d-m-Y", strtotime($agenda->getOriginal("date")))}}'
      });
  </script>
@endsection


