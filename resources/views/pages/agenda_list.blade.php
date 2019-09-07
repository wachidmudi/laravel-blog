@extends('layouts.app')

@section('title')

    Daftar Agenda -

@endsection

@section('template_fastload_css')

    .well{
        background-color: #fff;
        border: 0;
        border-radius: 0;
        box-shadow: inset 0 0 0 rgba(0,0,0,0);
        margin-bottom: 0;
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
        <h2 class="text-center">Daftar Agenda</h2>
        <div class="row">
            @foreach($agendas as $agenda)
            <div class="col-md-6">
                <div class="well">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/agenda_blog/{{ $agenda->id }}">{{ $agenda->name }}</a></h3>
                            <span>{{ $agenda->created_at }}</span>
                            <p>{!! $agenda->shortDescription !!}</p>
                            <p><a href="/agenda_blog/{{ $agenda->id }}">Read More</a></p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="pasca-event">
                                <div class="date text-center">
                                    <span>{{ $agenda->date }}</span>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
                <hr>
             </div>   
            @endforeach
        </div>
        <div class="text-center">
            {{ $agendas->links() }}
        </div>
    </div>
</div>    
@endsection
