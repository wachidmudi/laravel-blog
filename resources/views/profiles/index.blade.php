@extends('layouts.admin')

@section('template_fastload_css')
    ul.list-unstyled li{
        display: inline-block;
    }
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3>Profil</h3>
        </div>
        <div class="col-md-3 pull-right">
            <a href="/profile/create" class="btn btn-primary"><i class="icon icon-plus"></i> Tambah</a>
        </div>
    </div>
    @if(count($profiles) > 0)
        @foreach($profiles as $profile)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img class="img-responsive img-circle center-block" src="/storage/profile/{{ $profile->image }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h4>{{ $profile->name }}</h4>
                        <p>NIP. {{ $profile->nip }}</p>
                        <p>Jabatan : {{ $profile->position }}</p>
                        <p>Dibuat {{ $profile->created_at }}</p>
                        <ul class="list-unstyled">
                            <li><a href="/profile/{{ $profile->id }}/edit" class="btn btn-default">Edit</a></li>
                            <li>
                                {!!Form::open(['action' => ['ProfilesController@destroy', $profile->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $profiles->links() }}
    @else
        <p>No profiles found</p>
    @endif
@endsection