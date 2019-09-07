@extends('layouts.app')

@section('title')

    Daftar Berita -

@endsection

@section('template_fastload_css')

    .well{
        background-color: #fff;
        border: 0;
        border-radius: 0;
        box-shadow: inset 0 0 0 rgba(0,0,0,0);
        margin-bottom: 0;
    }
    span{
        letter-spacing: 2px;
        text-transform: uppercase;
    }    
    h3 a{
        color: #000;
    }
    h3 a:hover{
        color: #FC5185;
    }
    #pasca-blog .row .col-md-6:nth-child(2n + 1){
        content: "";
        clear: both;
    }

@endsection

@section('content')
<div id="pasca-blog">
    <div class="container">
        <h2 class="text-center">Daftar Berita</h2>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-6">
                <div class="well">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/berita_blog/{{ $blog->id }}">{{ $blog->shortTitle }}</a></h3>
                            <span>{{ $blog->created_at }}</span>
                            <p>{!! $blog->shortBody !!}</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div style="height: 120px; width: 100%; overflow: hidden; position: relative;">
                                <img class="center-block" style="height: 100%; width: auto;" src="/storage/cover_images/{{ $blog->cover_image }}">
                            </div>
                        </div>                    
                    </div>
                </div>
                <hr>
             </div>   
            @endforeach
        </div>
        <div class="text-center">
            {{ $blogs->links() }}
        </div>
    </div>
</div>    
@endsection