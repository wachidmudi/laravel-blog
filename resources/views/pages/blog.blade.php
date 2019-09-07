@extends('layouts.app')

@section('title')

    {{ Str::words($blog->title, $words = 10, $end = '...') }} -

@endsection

@section('template_fastload_css')

    .pasca-social-icons li a{
        color: #fff;
        border-radius: 50%;
        padding: 5px 5px 0 5px;
    }
    .pasca-social-icons li a i{
        font-size: 25px;
    }    
    .social-fb{
        color: #6788CE !important;
        border: 1px solid #6788CE;
    }
    .social-fb:hover{
        color: #fff !important;
        background-color: #6788CE;
        border: 1px solid #6788CE;
    }    
    .social-tw{
        color: #29C5F6 !important;
        border: 1px solid #29C5F6;
    }
    .social-tw:hover{
        color: #fff !important;
        background-color: #29C5F6;
        border: 1px solid #29C5F6;
    }    
    .social-gp{
        color: #E75C3C !important;
        border: 1px solid #E75C3C;
    }      
    .social-gp:hover{
        color: #fff !important;
        background-color: #E75C3C;
        border: 1px solid #E75C3C;
    }
    div p{
        font-size: 16px;
    }

@endsection

@section('content')
<div id="pasca-blog">
    <div class="container">
        <h1>{{$blog->title}}</h1>
        <div class="row">
            <div class="col-md-4">
                <p>Pasca Unesa - {{$blog->created_at}}</p>
            </div>
            <div class="col-md-3 text-center pull-right">
               @include('inc.share', [
                    'url' => request()->fullUrl(),
                    'description' => Str::words($blog->title, $words = 10, $end = '... - Pascasarjana UNESA'),
                    'image' => $blog->cover_image
                ])
            </div>
        </div>
        <div>
            @if ($blog->cover_image !== 'noimage.jpg')
                <img class="center-block" style="height: 100%; width: auto;" src="/storage/cover_images/{{$blog->cover_image}}">
            @endif
        </div>
        <br>
        <div>
            {!! $blog->body !!}
        </div>   
        <hr>
        <small>Penulis : {{$blog->user->name}}</small>     
        <hr>
        <a href="/daftar_berita_blog" class="btn btn-default"><i class="icon icon-arrow-left"></i> Daftar Berita</a>        
    </div>
</div>
@endsection

@section('footer_scripts')
    @include('scripts.social-share')    
    @include('scripts.file-downloadable')
@endsection