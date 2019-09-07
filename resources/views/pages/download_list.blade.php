@extends('layouts.app')

@section('title')

    Pusat Download -

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
<div id="pasca-download">
    <div class="container">
        <h2 class="text-center">Daftar Download</h2>
        <div class="row">
            @foreach($downloads as $download)
            <div class="col-md-6">
                    <div class="course">
                        <a href="/download_blog/{{ $download->id }}" class="course-img img-responsive" style="background-image: url(storage/download/{{ $download->cover_image }});" width="277px" height="337">
                        </a>
                        <div class="desc">
                            <h3><a href="/download_blog/{{ $download->id }}">{{ $download->shortTitle }}</a></h3>
                            <p>{!! $download->shortBody !!}</p>
                            <span><a href="/download_blog/{{ $download->id }}" class="btn btn-primary btn-sm btn-course">Read more...</a></span>
                        </div>
                    </div>
                    <hr>                
             </div>   
            @endforeach
        </div>
        <div class="text-center">
            {{ $downloads->links() }}
        </div>
    </div>
</div>    
@endsection