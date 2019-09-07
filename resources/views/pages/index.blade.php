@extends('layouts.app')

@section('template_fastload_css')

#pasca-blog .row .col-md-4:nth-child(4), #pasca-agenda .row .col-md-4:nth-child(4){
	content: "";
	clear: both;
}

@endsection

@section('content')
	@include('inc.hero')
	@include('inc.main')
@endsection
