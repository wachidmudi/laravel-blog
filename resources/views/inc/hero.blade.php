<aside id="pasca-hero">
	<div class="flexslider">
		<ul class="slides">
        @foreach($carousels as $carousel)
	   	<li style="background-image: url(/storage/carousel/{{ $carousel->image }});">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="row">
		   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
		   				<div class="slider-text-inner">
		   					<h1>{{ $carousel->title }}</h1>
								<h2>{{ $carousel->description }}</h2>
								<a class="btn btn-primary btn-lg" target="_blank" href="{{ $carousel->link }}">Read More!</a>
		   				</div>
		   			</div>
		   		</div>
	   		</div>
	   	</li>            
        @endforeach
	  	</ul>
  	</div>
</aside>

<!-- Nav Start -->
<nav class="pasca-nav" role="navigation">
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center menu-1">
					<ul>
						<li class="active"><a href="#pasca-blog"><i class="icon icon-news"></i> BERITA</a></li>
					</ul>
				</div>
				<div class="col-md-3 text-center menu-1">
					<ul>
						<li class="active"><a href="#pasca-kalender"><i class="icon icon-calender"></i> KALENDER </a></li>
					</ul>
				</div>
				<div class="col-md-3 text-center menu-1">
					<ul>
						<li><a href="#pasca-agenda"><i class="icon icon-bell"></i> Agenda</a></li>
					</ul>
				</div>
				<div class="col-md-3 text-center menu-1">
					<ul>
						<li class="active"><a href="#pasca-download"><i class="icon icon-file"></i> PUSAT DOWNLOAD</a></li>
					</ul>
				</div>									
			</div>
		</div>
	</div>
</nav>
<!-- Nav End -->