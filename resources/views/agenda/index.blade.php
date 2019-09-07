@extends('layouts.admin')

@section('template_fastload_css')
    ul.list-unstyled li{
        display: inline-block;
    }
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3>Agenda</h3>
        </div>
        <div class="col-md-3 pull-right">
            <a href="/agenda/create" class="btn btn-primary"><i class="icon icon-plus"></i> Tambah</a>
        </div>
    </div>
    @if(count($agendas) > 0)
        @foreach($agendas as $agenda)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h1>{{ $agenda->date }}</h1>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3>{{ $agenda->name }}</h3>
                        <p>{{ $agenda->name }}</p>
                        <small>Dibuat {{ $agenda->created_at }}</small>
                        <ul class="list-unstyled">
                            <li><a href="/agenda/{{ $agenda->id }}/edit" class="btn btn-default">Edit</a></li>
                            <li>
                                {!!Form::open(['action' => ['AgendasController@destroy', $agenda->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}                            
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>
        @endforeach
        {{$agendas->links()}}
    @else
        <p>No agendas found</p>
    @endif
@endsection