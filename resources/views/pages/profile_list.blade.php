@extends('layouts.app')

@section('title')

    Profil -

@endsection

@section('template_fastload_css')

	.profile .col-md-3:nth-child(5){
		content: "";
		clear: both;
	}

	/* Profile container */
	.profile {
	  margin: 20px 0;
	}

	/* Profile sidebar */
	.profile-sidebar {
	  padding: 20px 0 10px 0;
	  background: #fff;
	}

	.profile-userpic img {
	  float: none;
	  margin: 0 auto;
	  width: 50%;
	  height: 50%;
	  -webkit-border-radius: 50% !important;
	  -moz-border-radius: 50% !important;
	  border-radius: 50% !important;
	}

	.profile-usertitle {
	  text-align: center;
	  margin-top: 20px;
	}

	.profile-usertitle-name {
	  color: #5a7391;
	  font-size: 16px;
	  font-weight: 600;
	  margin-bottom: 7px;
	}

	.profile-usertitle-job {
	  text-transform: uppercase;
	  color: #5b9bd1;
	  font-size: 12px;
	  font-weight: 600;
	  margin-bottom: 15px;
	}

    #pasca-blog .row .col-md-3:nth-child(4n + 1){
        content: "";
        clear: both;
    }

@endsection

@section('content')
<div id="pasca-blog">
	<div class="container">
		<h2 class="text-center">Daftar Pimpinan</h2>
	    <div class="row profile">
	    	@if(count($profiles) > 0)
		    	@foreach($profiles as $profile)
				<div class="col-md-3">
					<div class="profile-sidebar">
						<!-- SIDEBAR USERPIC -->
						<div class="profile-userpic">
							<img src="/storage/profile/{{ $profile->image }}" class="img-responsive" alt="{{ $profile->name }}">
						</div>
						<!-- END SIDEBAR USERPIC -->
						<!-- SIDEBAR USER TITLE -->
						<div class="profile-usertitle">
							<div class="profile-usertitle-name">
								{{ $profile->name }}
							</div>
							<div class="profile-usertitle-name">
								<span>NIP. {{ $profile->nip }}</span>
							</div>							
							<div class="profile-usertitle-job">
								{{ $profile->position }}
							</div>
						</div>
						<!-- END SIDEBAR USER TITLE -->
					</div>
				</div>
				@endforeach
				{{ $profiles->links() }}
			@else
	        	<p>No profiles found</p>
	    	@endif
		</div>
	</div>	
</div>	
@endsection
