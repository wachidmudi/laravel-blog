@extends('layouts.admin')

@section('template_fastload_css')
    body{
        background-color: #EEF3F4;
    }
    #pasca-blog{
        padding: 1em 0;   
    }
    #pasca-blog .row{
        padding: 1em 0;   
    }    
    .panel-body > h3{
        padding-top: 1em;
    }
    strong{
        font-size: 18px;
    }
    #pasca-blog .row .col-md-6:nth-child(3){
        content: "";
        clear: both;
    }
    table{
        background-color: #fff;
        border: 1px solid #ddd;
    }
    .btn-default{
        background-color: #F9FAFF;
    }
    .table>tbody>tr>td{
        vertical-align: middle;
    }

@endsection

@section('content')
<div id="pasca-blog">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                <div class="text-center">
                    <a href="/posts/create" class="btn btn-primary"><i class="icon icon-plus"></i> Buat Berita</a>
                    <a href="/carousel/create" class="btn btn-primary"><i class="icon icon-plus"></i> Buat Slider</a>
                    <a href="/agenda/create" class="btn btn-primary"><i class="icon icon-plus"></i> Buat Agenda</a>
                    <a href="/calendar/create" class="btn btn-primary"><i class="icon icon-plus"></i> Buat Kalender</a>
                    <a href="/download/create" class="btn btn-primary"><i class="icon icon-plus"></i> Buat Download</a>
                    <a href="/profile/create" class="btn btn-primary"><i class="icon icon-plus"></i> Buat Profil</a>
                    <a href="/gallery/create" class="btn btn-primary"><i class="icon icon-plus"></i> Buat Galeri</a>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Blog PASCA</h3>
                        @if(count($posts) > 0)
                        <table class="table">
                            <tr>
                                <th><div class="text-center">Berita Terbaru</div></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        <strong>{{ $post->title }}</strong>
                                        <br>
                                        <br>
                                        <p >{{ $post->created_at }}</p>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td><a href="/posts" class="btn btn-link center-block">Lihat Semua</a></td>
                            </tr>
                        </table>
                        @else
                            <p>You have no posts</p>
                        @endif                        
                    </div>

                    <div class="col-md-6">
                        <h3>Agenda PASCA</h3>
                        @if(count($agendas) > 0)
                        <table class="table">
                            <tr>
                                <th><div class="text-center">Agenda Terbaru</div></th>
                            </tr>
                            @foreach($agendas as $agenda)
                                <tr>
                                    <td>
                                        <strong>{{ $agenda->name }}</strong>
                                        <br>
                                        <br>
                                        <p>{{ $agenda->created_at }}</p>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td><a href="/agenda" class="btn btn-link center-block">Lihat Semua</a></td>
                            </tr>                            
                        </table>
                        @else
                            <p>You have no agendas</p>
                        @endif                        
                    </div>

                    
                    <div class="col-md-6">
                        <h3>Download PASCA</h3>
                        @if(count($downloads) > 0)
                        <table class="table">
                            <tr>
                                <th><div class="text-center">Download Terbaru</div></th>
                            </tr>
                            @foreach($downloads as $download)
                                <tr>
                                    <td>
                                        <strong>{{ $download->title }}</strong>
                                        <br>
                                        <br>
                                        <p>{{ $download->created_at }}</p>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td><a href="/download" class="btn btn-link center-block">Lihat Semua</a></td>
                            </tr>                            
                        </table>
                        @else
                            <p>You have no downloads</p>
                        @endif                        
                    </div>

                    <div class="col-md-6">
                        <h3>Slider PASCA</h3>
                        @if(count($carousels) > 0)
                        <table class="table">
                            <tr>
                                <th><div class="text-center">Slider Terbaru</div></th>
                            </tr>
                            @foreach($carousels as $carousel)
                                <tr>
                                    <td>
                                        <strong>{{ $carousel->title }}</strong>
                                        <br>
                                        <br>
                                        <p>{{ $carousel->created_at }}</p>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td><a href="/carousel" class="btn btn-link center-block">Lihat Semua</a></td>
                            </tr>                            
                        </table>
                        @else
                            <p>You have no carousels</p>
                        @endif                         
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
