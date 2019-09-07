@extends('layouts.admin')

@section('template_fastload_css')
    ul.list-unstyled li{
        display: inline-block;
    }
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3>Kalender</h3>
        </div>
        <div class="col-md-3 pull-right">
            <a href="/calendar/create" class="btn btn-primary"><i class="icon icon-plus"></i> Tambah</a>
        </div>
    </div>
    @if(count($calendars) > 0)
        @foreach($calendars as $calendar)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img class="img-responsive" src="/storage/calendar/{{ $calendar->image }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h4>{{ $calendar->title }}</h4>
                        <p>Dibuat {{ $calendar->created_at }}</p>
                        <ul class="list-unstyled">
                            <li><a href="/calendar/{{ $calendar->id }}/edit" class="btn btn-default">Edit</a></li>
                            <li>
                                {!!Form::open(['action' => ['CalendarsController@destroy', $calendar->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $calendars->links() }}
    @else
        <p>No calendars found</p>
    @endif
@endsection