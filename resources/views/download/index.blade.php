@extends('layouts.admin')

@section('template_fastload_css')
    ul.list-unstyled li{
        display: inline-block;
    }
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3>Pusat Download</h3>
        </div>
        <div class="col-md-3 pull-right">
            <a href="/download/create" class="btn btn-primary"><i class="icon icon-plus"></i> Tambah</a>
        </div>
    </div>
    @if(count($downloads) > 0)
        @foreach($downloads as $download)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/download/{{ $download->cover_image }}" class="img-responsive">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h1>{{ $download->title }}</h1>
                        <small>Deskripsi</small>
                        <p>{!! $download->shortBody !!}</p>
                        <small>Dibuat {{ $download->created_at }}</small>
                        <ul class="list-unstyled">
                            <li><a href="/download/{{ $download->id }}/edit" class="btn btn-default">Edit</a></li>
                            <li>
                                {!!Form::open(['action' => ['DownloadsController@destroy', $download->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}                            
                            </li>
                        </ul>                          
                    </div>
                </div>
            </div>
        @endforeach
        {{ $downloads->links() }}
    @else
        <p>No downloads found</p>
    @endif
@endsection