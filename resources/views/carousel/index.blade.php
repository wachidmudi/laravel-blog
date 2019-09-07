@extends('layouts.admin')

@section('template_fastload_css')
    ul.list-unstyled li{
        display: inline-block;
    }
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3>Slider</h3>
        </div>
        <div class="col-md-3 pull-right">
            <a href="/carousel/create" class="btn btn-primary"><i class="icon icon-plus"></i> Tambah</a>
        </div>
    </div>
    @if(count($carousels) > 0)
        @foreach($carousels as $carousel)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/carousel/{{ $carousel->image }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h4>{{ $carousel->title }}</h4>
                        <p>{{ $carousel->description }}</p>
                        <span>Link :</span>
                        <a href="{{ $carousel->link }}" class="btn btn-link" target="_blank">{{ $carousel->link }}</a>
                        <p>Dibuat {{ $carousel->created_at }}</p>
                        <ul class="list-unstyled">
                            <li><a href="/carousel/{{ $carousel->id }}/edit" class="btn btn-default">Edit</a></li>
                            <li>
                                {!!Form::open(['action' => ['CarouselsController@destroy', $carousel->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}                            
                            </li>
                        </ul>                          
                    </div>
                </div>
            </div>
        @endforeach
        {{-- {{$carousels->links()}} --}}
    @else
        <p>No carousels found</p>
    @endif
@endsection