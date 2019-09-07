@extends('layouts.app')

@section('title')

    Galeri -

@endsection

@section('template_fastload_css')

    #pasca-blog .row .col-md-4:nth-child(3n + 1){
        content: "";
        clear: both;
    }
    
@endsection

@section('content')
<div id="pasca-blog">
	<div class="container">
		<div class="text-center pasca-heading">
			<h2>GALERI PASCA</h2>
			{{-- <p>Odit ab aliquam dolor eius.</p> --}}
		</div>
		<div class="row">
			@foreach($galleries as $gallery)
				<div class="col-lg-4 col-md-4">
					<div class="pasca-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(storage/gallery/{{ $gallery->image }});"></a>
						<div class="blog-text">
							<h3>{{ $gallery->name }}</h3>
						</div> 
					</div>
				</div>			
			@endforeach
		</div>		
	</div>
</div>
@endsection