<div id="pasca-blog">
	<div class="container">
		<div class="text-center pasca-heading">
			<h2>BERITA PASCA</h2>
		</div>
		<div class="row">
			@foreach($articles as $article)
				<div class="col-lg-4 col-md-4">
					<div class="pasca-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(storage/cover_images/{{ $article->image }});"></a>
						<div class="blog-text">
							<h3><a href="/berita_blog/{{ $article->slug }}">{{ $article->shortTitle }}</a></h3>
							<span class="posted_on">{{ $article->created_at }}</span>
							<p>{!! $article->shortbody !!}</p>
						</div> 
					</div>
				</div>			
			@endforeach
			<div class="clearfix"></div>
			<div class="text-center animate-box">
				<div class="courseone">
						<a href="/daftar_berita_blog" class="btn btn-primary btn-sm btn-course">Lihat Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="pasca-kalender">
	<div class="container">
		<div class="text-center pasca-heading">
			<h2>KALENDER</h2>
		</div>		
		<div class="row">
			<div class="col-lg-12 col-md-12">
				@foreach($calendars as $calendar)
				<div class="pasca-blog animate-box" style="padding: 15px 0">
					<h4 class="text-center">
						{{ $calendar->title }}
					</h4>
					<a style="overflow: hidden;" href="/storage/calendar/{{ $calendar->image }}" class="blog-img-holder">
						<img style="background-size: unset; max-height: 720px;" class="img-responsive center-block" src="/storage/calendar/{{ $calendar->image }}">
					</a>
				</div>	
				@endforeach			
			</div>
		</div>
	</div>
</div>

<div id="pasca-agenda">
	<div class="container">
		<div class="row animate-box">
			<div class="text-center pasca-heading">
				<h2>AGENDA</h2>
			</div>
		</div>
		<div class="row row-padded-mb">
			@foreach($agendas as $agenda)
			<div class="col-md-4 animate-box">
				<div class="pasca-event">
					<div class="date text-center"><span>{{ $agenda->date }}</span></div>
					<h3><a href="/agenda_blog/{{ $agenda->slug }}">{{ $agenda->name }}</a></h3>
					<p>{!! $agenda->shortDescription !!}</p>
					<p><a href="/agenda_blog/{{ $agenda->slug }}">Read More <i class="icon icon-arrow-right3" style="vertical-align: middle;"></i></a></p>
				</div>
			</div>
			@endforeach
			<div class="clearfix"></div>
			<div class="text-center animate-box">
				<div class="courseone">
						<a href="/daftar_agenda_blog" class="btn btn-primary btn-sm btn-course">Lihat Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
</div>	
	
<div id="pasca-download">
	<div class="container">
		<div class="row animate-box">
			<div class="text-center pasca-heading">
				<br/>
				<h2>PUSAT DOWNLOAD</h2>
			</div>
		</div>
		<div class="row">
			@foreach($downloads as $download)
			<div class="col-md-4 animate-box">
				<div class="course">
					<a href="/download_blog/{{ $download->id }}" class="course-img" style="background-image: url(storage/download/{{ $download->image }});" width="277px" height="337">
					</a>
					<div class="desc">
						<h3><a href="/download_blog/{{ $download->slug }}">{{ $download->shortTitle }}</a></h3>
						<p>{!! $download->shortBody !!}</p>
						<span><a href="/download_blog/{{ $download->slug }}" class="btn btn-primary btn-sm btn-course">Read more...</a></span>
					</div>
				</div>
			</div>
			@endforeach
			<div class="clearfix"></div>
			<div class="text-center animate-box">
				<div class="courseone">
						<a href="/daftar_download_blog" class="btn btn-primary btn-sm btn-course">Lihat Selengkapnya</a>
				</div>
			</div>	
		</div>
	</div>
</div>