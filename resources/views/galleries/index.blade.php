@extends('layouts.admin')

@section('template_fastload_css')
    ul.list-unstyled li{
        display: inline-block;
    }
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3>Galeri</h3>
        </div>
        <div class="col-md-3 pull-right">
            <a href="/gallery/create" class="btn btn-primary"><i class="icon icon-plus"></i> Tambah</a>
        </div>
    </div>
    @if(count($galleries) > 0)
        @foreach($galleries as $gallery)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img class="img-responsive" src="/storage/gallery/{{ $gallery->image }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h4>{{ $gallery->name }}</h4>
                        <p>{{ $gallery->position }}</p>
                        <p>Dibuat {{ $gallery->created_at }}</p>
                        <ul class="list-unstyled">
                            <li><a href="/gallery/{{ $gallery->id }}/edit" class="btn btn-default">Edit</a></li>
                            <li>
                                {!!Form::open(['action' => ['GalleriesController@destroy', $gallery->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $galleries->links() }}
    @else
        <p>No galleries found</p>
    @endif
@endsection