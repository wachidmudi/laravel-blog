@extends('layouts.admin')

@section('template_fastload_css')
    ul.list-unstyled li{
        display: inline-block;
    }
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3>Berita</h3>
        </div>
        <div class="col-md-3 pull-right">
            <a href="/posts/create" class="btn btn-primary"><i class="icon icon-plus"></i> Tambah</a>
        </div>
    </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Dibuat {{$post->created_at}} oleh {{$post->user->name}}</small>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a></li>
                        <li>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}                            
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
        <div class="text-center">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection